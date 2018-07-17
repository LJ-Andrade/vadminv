<?php

namespace App\Http\Controllers\Portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PortCategory;
use App\PortArticle;
use App\PortImage;
use App\User;
use File;
use Image;


class ArticlesController extends Controller
{

    /////////////////////////////////////////////////
    //                   LIST                      //
    /////////////////////////////////////////////////


    public function index(Request $request)
    {
        $title = $request->get('title');
        $perPage = 25;

        if ($title != ''){
                // Search User AND Role
                $articles = PortArticle::where('title', 'LIKE', "%$title%")->orderBy('id', 'DESC')->paginate(25);
                $articles->each(function($articles){
                    $articles->portCategory;
                    $articles->user;
                    $articles->portImages;
                });
            } else {
                // Search All
                $articles = PortArticle::orderBy('id', 'DESC')->paginate($perPage);
                $articles->each(function($articles){
                    $articles->portCategory;
                    $articles->user;
                    $articles->portImages;
                });
        }
        return view('vadmin.portfolio.index')->with('articles', $articles);
    }

    public function show($id)
    {
        $article = PortArticle::findOrFail($id);
        return view('vadmin.portfolio.show')->with('article', $article);
    }

    /////////////////////////////////////////////////
    //                  CREATE                     //
    /////////////////////////////////////////////////

    public function create(Request $request)
    {
        $categories = PortCategory::orderBy('name', 'ASC')->pluck('name', 'id');
        $status     = PortArticle::search($request->status)->get();
        // $tags       = PortTag::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('vadmin.portfolio.create')
            ->with('categories', $categories)
            // ->with('tags', $tags)
            ->with('status', $status);
    }

    public function store(Request $request)
    {   
        $this->validate($request,[

            'title'       => 'required|min:4|max:250|unique:articles',
            'category_id' => 'required',
            'slug'        => 'required|alpha_dash|min:5|max:255|unique:articles,slug',
            // 'image'       => 'image',

        ],[
            'title.required'       => 'Debe ingresar un título',
            'title.min'            => 'El título debe tener al menos 4 caracteress',
            'title.max'            => 'El título debe tener como máximo 250 caracteress',
            'title.unique'         => 'El título ya existe en otro artículo',
            'category_id.required' => 'Debe ingresar una categoría',
            'slug.required'        => 'Se requiere un slug',
            'slug.min'             => 'El slug debe tener 5 caracteres como mínimo',
            'slug.max'             => 'El slug debe tener 255 caracteres como máximo',
            'slug'                 => 'El slug debe tener guiones bajos en vez de espacios',
            'slug.unique'          => 'El slug debe ser único, algún otro artículo lo está usando',
            // 'image'                => 'El archivo adjuntado no es soportado',
        ]);

        $article           = new PortArticle($request->all());
        $article->user_id  = \Auth::user()->id;
        $article->slug = $this->checkSlug(slugify($article->slug));

        $physic_image      = $request->file('image');
        $imgPath           = public_path("webimages/portfolio/"); 
        $filename          = date("dmYis");
        $extension         = '.jpg';
        $article->filename = $filename.$extension;
        $article->thumb    = $filename.'-thumb'.$extension;
        
        try {
            $article->save();
            Image::make($physic_image)->encode('jpg', 80)->fit(800, 800)->save($imgPath.$filename.$extension);
            Image::make($physic_image)->encode('jpg', 80)->fit(250, 250)->save($imgPath.$filename.'-thumb'.$extension);
        } catch(Exception $e){
            return 'No';
        }
        return redirect()->route('portfolio.index')->with('message','Artículo creado');
    }

    /////////////////////////////////////////////////
    //                   UPDATE                    //
    /////////////////////////////////////////////////

    public function edit($id)
    {   
        
        $article    = PortArticle::find($id);
        $article->category;
        $categories = PortCategory::orderBy('name', 'DESC')->pluck('name', 'id');

        $status      = $article->status;

        return view('vadmin.portfolio.edit')
            ->with('categories', $categories)
            ->with('article', $article)
            ->with('status', $status);

    }

    public function update(Request $request, $id)
    {
        $path      = public_path("webimages/portfolio/");
        $article   = PortArticle::find($id);
        $article->fill($request->all());
        $article->slug = $this->checkSlug(slugify($article->slug));
        $image = $request->file('image');
        try{
            if ($image) {
                $imgPath           = public_path("webimages/portfolio/"); 
                $filename          = date("dmYis");
                Image::make($image)->encode('jpg', 80)->fit(800, 800)->save($imgPath.$article->filename);
                Image::make($image)->encode('jpg', 80)->fit(250, 250)->save($imgPath.$article->thumb);
                // File::Delete(public_path($path . $lastImage));
                // File::Delete(public_path($path . $lastThumb));
            }

            $article->save();

        } catch (Exception $e){
            dd($e);
        }

        return redirect()->route('portfolio.index')->with('message', 'El item se ha editado con éxito.');
    }


    public function updateStatus(Request $request, $id)
    {
            $article = PortArticle::find($id);
            $article->status = $request->status;
            $article->save();

            return response()->json([
                "status" => 1
            ]);
    }

    public function checkSlug($slug)
    {
        $checkSlug = PortArticle::where('slug', $slug)->first();
        if($checkSlug != null) 
        {
            $checkSlug = $checkSlug->slug.'-dif-'. rand(1000,10000). date('d').date('s');
            return $checkSlug;
        } 
        else
        {
            return $slug;
        }
    }

    /////////////////////////////////////////////////
    //                   DELETE                    //
    /////////////////////////////////////////////////


    public function deletePortArticleImg(Request $request, $id)
    {
        $image  = PortImage::find($id);
        $path   = 'webimages/portfolio/';
        
        try {
            File::Delete(public_path($path . $image->name));
            $image->delete();
            return response()->json([
                "result"   => 1,
            ]);  
            
        } catch (Exception $e) {
            return response()->json([
                "result"   => 0,
                "error"    => $e
            ]);    
        }

    }

    // ---------- Ajax Delete -------------- //

    public function ajax_delete(Request $request, $id)
    {
        $article  = PortArticle::find($id);
        $path     = 'webimages/portfolio/';
        try {
            File::Delete(public_path($path.$article->filename));
            File::Delete(public_path($path.$article->thumb));
            
            $article->delete();
            return response()->json([
                "result"   => 1,
                ]);  
                
            } catch (Exception $e) {
                return response()->json([
                    "result"   => 0,
                    "error"    => $e
                ]);    
        }
    }

    // ---------- Ajax Bach Delete -------------- //
    public function ajax_batch_delete(Request $request)
    {        
        $path     = 'webimages/portfolio/';
        foreach ($request->id as $id) {
            try {
                $article  = PortArticle::find($id);
                File::Delete(public_path($path.$article->filename));
                File::Delete(public_path($path.$article->thumb));
                $article->delete();

            } catch (Exception $e) {
                return response()->json([
                    "result"   => 0,
                    "error"    => $e
                ]);    
            }
        }
        echo 1;
    }
}
