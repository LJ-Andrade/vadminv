<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;

class TagsController extends Controller
{

    //---------------------------  Display ----------------------------------- //

    public function index(Request $request)
    {   
        $title = $request->get('name');
        $perPage = 25;

        if ($title != ''){
            $tags = Tag::where('name', 'LIKE', "%$title%")->paginate($perPage);
        } else {
            $tags = Tag::orderBy('id', 'ASC')->paginate($perPage);
        }
        
        return view('vadmin.blog.tags.index')->with('tags', $tags);
    }


    //---------------------------  Create ---------------------------------- //

    public function create()
    {
        return view('vadmin.blog.tags.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'max:120|required|unique:tags'
        ],[
            'name.unique'         => 'El tag ya existe'
        ]);

        $item = new Tag($request->all());
        $item->save();

        return redirect('vadmin/tags')->with('message', 'El tag '. $item->name.' ha sido creado');

    }


     //-----------------------  Edit / Update ---------------------------- //

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('vadmin.blog.tags.edit')->with('tag', $tag);

    }

    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);
        
        $this->validate($request,[
            'name' =>  'max:120|required|unique:tags,name,'.$tag->id
        ],[
            'name.unique'         => 'El tag ya existe'
        ]);
        
        $tag->fill($request->all());
        $tag = $tag->save();

        return redirect('vadmin/tags')->with('message', 'El tag fue editado correctamente');;

    }


    // ---------- Delete -------------- //

    public function destroy($id)
    {
        try {
            $tag = Tag::find($id);
            $tag->delete();
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
    public function ajax_batch_delete(Request $request, $id)
    {
        foreach ($request->id as $id) {
        
            $tag  = Tag::find($id);
            Tag::destroy($id);
        }
        echo 1;
    }


} // End
