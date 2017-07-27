<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Article;
use App\Newsletter;


class VadminController extends Controller
{

    public function __construct()
    {
        // Date convert to passed time plugin
        Carbon::setLocale('es');
        $this->middleware('auth');
    }

    public function index(Request $request)
    {       
        
        $articles = Article::orderBy('id', 'ASC')->take(3)->get();
        
        return view('vadmin')->with('articles', $articles);
    }

    public function newsletter(Request $request)
    {
        $suscriptors = Newsletter::paginate(50);
        
        return view('vadmin.newsletter')->with('suscriptors', $suscriptors);
    }

    public function delete_subscriptors(Request $request, $id)
    {   
        if(is_array($request->id)) {
            try {
                foreach ($request->id as $id) {
                    $suscriptors = Newsletter::find($id);
                    // echo $suscriptors.'<br>';
                    $suscriptors->delete();
                    
                }
                return response()->json([
                    "result"   => 1,
                ]); 
            }  catch (Exception $e) {
                return response()->json([
                    "result"   => 0,
                    "error"    => $e
                ]);    
            }
        } else {
            try {
                $suscriptor = Newsletter::find($id);
                $suscriptor->delete();
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
    }

}
