<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use File;


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
                $articles = Article::where('title', 'LIKE', "%$title%")->orderBy('title','DESC')->paginate(25);
                $articles->each(function($articles){
                    $articles->category;
                    $articles->user;
                    $articles->images;
                });
            
            } else {
                // Search All
                $articles = Article::orderBy('id', 'DESC')->paginate($perPage);
                $articles->each(function($articles){
                    $articles->category;
                    $articles->user;
                    $articles->images;
                });
                
        }

        return view('vadmin.blog.index')->with('articles', $articles);
    }

    /////////////////////////////////////////////////
    //                  CREATE                     //
    /////////////////////////////////////////////////

    public function create(Request $request)
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags       = Tag::orderBy('name', 'ASC')->pluck('name', 'id');
        $status     = Article::search($request->status)->get();
        return view('vadmin.blog.create')
            ->with('categories', $categories)
            ->with('tags', $tags)
            ->with('status', $status);
    }


    public function store(Request $request)
    {


        $this->validate($request,[

            'title'       => 'required|min:4|max:250|unique:articles',
            'category_id' => 'required',
            'slug'        => 'required|alpha_dash|min:5|max:255|unique:articles,slug',
            'content'     => 'required|min:1',
            'image'       => 'image',

        ],[
            'title.required'       => 'Debe ingresar un título',
            'title.min'            => 'El título debe tener al menos 4 caracteress',
            'title.max'            => 'El título debe tener como máximo 250 caracteress',
            'title.unique'         => 'El título ya existe en otro artículo',
            'category_id.required' => 'Debe ingresar una categoría',
            'slug.required'        => 'Se requiere un slug',
            'slug'                 => 'El slug debe tener guiones bajos en vez de espacios',
            'slug.min'             => 'El slug debe tener 5 caracteres como mínimo',
            'slug.max'             => 'El slug debe tener 255 caracteres como máximo',
            'slug.unique'          => 'El slug debe ser único, algún otro artículo lo está usando',
            'content.min'          => 'El contenido debe contener al menos 60 caracteres',
            'content.required'     => 'Debe ingresar contenido',
            'image'                => 'El archivo adjuntado no es soportado',
        ]);

        $path             = public_path("webimages/blog/articles/"); 
        $article          = new Article($request->all());

        $article->user_id = \Auth::user()->id;
        $article->slug = $this->checkSlug(slugify($article->slug));
        
        $article->save();

        // Sync() fills pivote table. Gets un array.
        $article->tags()->sync($request->tags);

        $images           = $request->file('images');

        if ($article->save() && $images)
        {
            foreach($images as $phisic_image)
            {
                $name     = md5($phisic_image->getFilename().time()).'.'.$phisic_image->getClientOriginalExtension();
                $img      = \Image::make($phisic_image->path());
                
                $img->fit(915,617)->save($path.'/'.$name);

                $image            = new Image();
                $image->name      = $name;
                $image->article()->associate($article);
                $image->save();
            }
        } 

        return redirect()->route('blog.index')->with('message','Artículo creado');

    }

    /////////////////////////////////////////////////
    //                   UPDATE                    //
    /////////////////////////////////////////////////

    public function edit($id)
    {   

        $tags       = Tag::orderBy('name', 'DESC')->pluck('name', 'id');
        $article    = Article::find($id);
        $article->category;
        $categories = Category::orderBy('name', 'DESC')->pluck('name', 'id');
        $article->each(function($article){
                $article->images;
        });

        // Acá se llaman los id de los tags y se los convierte de objeto a array
        $actual_tags = $article->tags->pluck('id')->ToArray();
        $status      = $article->status;

        return view('vadmin.blog.edit')
            ->with('categories', $categories)
            ->with('article', $article)
            ->with('tags', $tags)
            ->with('actual_tags', $actual_tags)
            ->with('status', $status);

    }

    public function update(Request $request, $id)
    {
        $path      = public_path("webimages/blog/articles"); 

        $article   = Article::find($id);
        $article->fill($request->all());
        $article->slug = $this->checkSlug(slugify($article->slug));
        $article->save();

        // Sync() fills pivote table. Gets un array.
        $article->tags()->sync($request->tags);

        $images    = $request->file('images');

        if ($article->save() && $images)
        {
            foreach($images as $phisic_image)
            {
                $name         = md5($phisic_image->getFilename().time()).'.'.$phisic_image->getClientOriginalExtension();
                $img          = \Image::make($phisic_image->path());
                
                $img->fit(915,617)->save($path.'/'.$name);

                $image        = new Image();
                $image->name  = $name;
                $image->article()->associate($article);
                $image->save();
            }
        } 
     
        return redirect()->route('blog.index')->with('message', 'El artículo se ha editado con éxito.');
    }


    public function updateStatus(Request $request, $id)
    {

            $article = Article::find($id);
            $article->status = $request->status;
            $article->save();

            return response()->json([
                "lastStatus" => $article->status,
            ]);

    }

    public function checkSlug($slug)
    {
        $checkSlug = Article::where('slug', $slug)->first();
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


    public function deleteArticleImg(Request $request, $id)
    {
        $image  = Image::find($id);
        $path   = 'webimages/blog/articles/';
        
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

    // ---------- Ajax Bach Delete -------------- //

    public function ajax_delete(Request $request, $id)
    {
        $article  = Article::find($id);

        $path     = 'webimages/blog/articles/';
        $article->image;
        $lastpath = Image::where('article_id', '=', $id);
        $article->each(function($articles){
            $articles->images;
        });

        // BORRAR IMAGEN ARREGLAR
        $article_image = $article->images;
        
        try {
            foreach ($article_image as $phisic_image) {
                File::Delete(public_path( $path . $phisic_image->name));
            }

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


        // return redirect()->route('catalogo.index')->with('message', 'El artículo ha sido eliminado');
    }


        // ---------- Ajax Bach Delete -------------- //
        public function ajax_batch_delete(Request $request, $id)
        {
            // $ids = $request->id;

            foreach ($request->id as $id) {
            
                $article  = Article::find($id);
                $path  = 'webimages/blog/articles';

                $article_image = $article->images;
                foreach ($article_image as $phisic_image) {
                    File::Delete(public_path( $path . $phisic_image->name));
                }
                
                Article::destroy($id);
            }
            echo 1;
        }

}
