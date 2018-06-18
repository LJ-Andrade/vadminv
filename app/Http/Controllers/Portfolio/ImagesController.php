<?php

namespace App\Http\Controllers\Portfolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PortImage;

class ImagesController extends Controller
{
    public function index()
    {
    	$images = PortImage::all();
    	$images->each(function($images){
    		$images->article;
    	});

		return view('vadmin.images.index')->with('images', $images);
    }
}
