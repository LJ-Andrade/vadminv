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
        $tags = Tag::orderBy('id', 'ASC')->paginate(12);
        
        return view('vadmin.blog.categories.index')->with('tags', $tags);
    }

    // ---------- Store --------------- //

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'max:120|required|unique:tags'
        ],[
            'name.unique'         => 'El talle ya existe'
        ]);

        $item = new Tag($request->all());
        $item->save();

        return redirect('vadmin/tags')->with('message', 'El Tag '. $item->name.' ha sido creado');
    }


    // ---------- Edit --------------- //
    public function ajax_edit($id)
    {
        $tag = Tag::find($id);
        return response()->json($tag);
    }

    
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('vadmin.blog.tags.edit')->with('tag', $tag);
    }


    

    // ---------- Update -------------- //
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'     => 'max:120|required|unique:tags'
        ],[
            'name.unique'         => 'El tag ya existe'
        ]);
        
        $tag = Tag::find($id);
        $tag->fill($request->all());

        $result = $tag->save();
        if ($result) {
            return response()->json(['success'=>'true']);
        } else {
            return response()->json(['success'=>'false']);
        }
    }


    // ---------- Delete -------------- //
    public function ajax_delete(Request $request, $id)
    {
        $tag  = Tag::find($id);
        $tag->delete();
        echo 1;
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        echo 1;
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
