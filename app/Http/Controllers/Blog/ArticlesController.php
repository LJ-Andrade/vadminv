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
        $articles = Article::search($request->title)->orderBy('id', 'DESC')->paginate(12);
        $articles->each(function($articles){
            $articles->category;
            $articles->user;
            $articles->images;
        });

        return view('vadmin.blog.index')->with('articles', $articles);

    }


    // ----------- List --------------- //
    public function ajax_list(Request $request)
    {
        
        $articles = Article::search($request->title)->orderBy('id', 'DESC')->paginate(12);
        $articles->each(function($articles){
            $articles->category;
            $articles->user;
            $articles->images;
        });

        return view('vadmin/blog/list')->with('articles', $articles);
        
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
            'slug.min'             => 'El slug debe tener 5 caracteres como mínimo',
            'slug.max'             => 'El slug debe tener 255 caracteres como máximo',
            'slug.max'             => 'El slug debe tener guiones bajos en vez de espacios',
            'slug.unique'          => 'El slug debe ser único, algún otro artículo lo está usando',
            'content.min'          => 'El contenido debe contener al menos 60 caracteres',
            'content.required'     => 'Debe ingresar contenido',
            'image'                => 'El archivo adjuntado no es soportado',
        ]);

        $path             = public_path("webimages/blog/"); 
        $article          = new Article($request->all());

        $article->user_id = \Auth::user()->id;
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
                
                $img->fit(600)->save($path.'/'.$name);

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

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     $article = Article::find($id);
    //     return view('vadmin.articles.show')->with('article', $article);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $path      = public_path("webimages/blog/"); 

        $article   = Article::find($id);
        $article->fill($request->all());
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
                
                $img->fit(600)->save($path.'/'.$name);

                $image        = new Image();
                $image->name  = $name;
                $image->article()->associate($article);
                $image->save();
            }
        } 

        return redirect()->route('blog.index')->with('message', 'Se ha editado el artículo con éxito');
        
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

    /////////////////////////////////////////////////
    //                   DELETE                    //
    /////////////////////////////////////////////////


    public function deleteArticleImg(Request $request, $id)
    {
        $image  = Image::find($id);
        $path   = 'webimages/blog/';
        File::Delete(public_path($path . $image->name));
        $image->delete();
        echo 1;
    }

    // ---------- Ajax Bach Delete -------------- //

    public function ajax_delete(Request $request, $id)
    {
        $article  = Article::find($id);

        $path     = 'webimages/blog/';
        $article->image;
        $lastpath = Image::where('article_id', '=', $id);
        $article->each(function($articles){
            $articles->images;
        });

        // BORRAR IMAGEN ARREGLAR
        $article_image = $article->images;

        foreach ($article_image as $phisic_image) {
            File::Delete(public_path( $path . $phisic_image->name));
        }

        $article->delete();
        echo 1;
        // return redirect()->route('catalogo.index')->with('message', 'El artículo ha sido eliminado');
    }


        // ---------- Ajax Bach Delete -------------- //
        public function ajax_batch_delete(Request $request, $id)
        {
            // $ids = $request->id;

            foreach ($request->id as $id) {
            
                $article  = Article::find($id);
                $path  = 'webimages/blog/';

                $article_image = $article->images;
                foreach ($article_image as $phisic_image) {
                    File::Delete(public_path( $path . $phisic_image->name));
                }
                
                Article::destroy($id);
            }
            echo 1;
        }

}
