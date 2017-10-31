<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Session;

class CategoriesController extends Controller
{

    //---------------------------  Display ----------------------------------- //

    public function index(Request $request)
    {
        $key     = $request->get('search');
        $perPage = 20;

        if (!empty($key)) {
            $categories = Category::where('name', 'LIKE', "%$key%")->paginate($perPage);
        } else {
            $categories = Category::paginate($perPage);
        }

            return view('vadmin.blog.categories.index')->with('categories', $categories);

    }

    public function show($id)
    {
        
    }


    //---------------------------  Create ---------------------------------- //

    public function create()
    {
        return view('vadmin.blog.categories.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'max:120|required|unique:categories'
        ],[
            'name.unique'         => 'La categoría ya existe'
        ]);

        $item = new Category($request->all());
        $item->save();

        return redirect('vadmin/categories')->with('message', 'La categoría '. $item->name.' ha sido creada');

    }

    //-----------------------  Edit / Update ---------------------------- //

    public function edit($id)
    {
        $category = Category::find($id);
        return view('vadmin.blog.categories.edit')->with('category', $category);

    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        
        $this->validate($request,[
            'name' =>  'max:120|required|unique:categories,name,'.$category->id
        ],[
            'name.unique'         => 'La categoría ya existe'
        ]);
        
        $category->fill($request->all());
        $category = $category->save();

        return redirect('vadmin/categories')->with('message', 'Categoría editada correctamente');;

    }


    //---------------------------  Destroy ----------------------------------- //


    public function destroy($id)
    {
        $category = Category::find($id);
        
        try {
            $category->delete();
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
            $categories  = Category::find($id);
            Category::destroy($id);
        }
        echo 1;
    }

} // End
