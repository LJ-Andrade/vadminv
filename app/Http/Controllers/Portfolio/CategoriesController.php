<?php

namespace App\Http\Controllers\Portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PortCategory;
use Session;

class CategoriesController extends Controller
{

    //---------------------------  Display ----------------------------------- //

    public function index(Request $request)
    {
        $key     = $request->get('search');
        $perPage = 20;

        if (!empty($key)) {
            $categories = PortCategory::where('name', 'LIKE', "%$key%")->paginate($perPage);
        } else {
            $categories = PortCategory::paginate($perPage);
        }
            return view('vadmin.portfolio.categories.index')->with('categories', $categories);
    }

    public function show($id)
    {
        //
    }

    //---------------------------  Create ---------------------------------- //

    public function create()
    {
        return view('vadmin.portfolio.categories.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'max:120|required|unique:port_categories'
        ],[
            'name.unique'         => 'La categoría ya existe'
        ]);

        $item = new PortCategory($request->all());
        $item->save();

        return redirect('vadmin/port_categories')->with('message', 'La categoría '. $item->name.' ha sido creada');

    }

    //-----------------------  Edit / Update ---------------------------- //

    public function edit($id)
    {
        $category = PortCategory::find($id);
        return view('vadmin.portfolio.categories.edit')->with('category', $category);

    }

    public function update(Request $request, $id)
    {
        $category = PortCategory::find($id);
        
        $this->validate($request,[
            'name' =>  'max:120|required|unique:categories,name,'.$category->id
        ],[
            'name.unique'         => 'La categoría ya existe'
        ]);
        
        $category->fill($request->all());
        $category = $category->save();

        return redirect('vadmin/port_categories')->with('message', 'Categoría editada correctamente');;

    }

      //---------------------------  Destroy ----------------------------------- //


      public function destroy($id)
      {
          $category = PortCategory::find($id);
          
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
              $categories  = PortCategory::find($id);
              PortCategory::destroy($id);
          }
          echo 1;
      }
  

} // End
