<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortArticle extends Model
{
    protected $table = "port_articles";

    protected $fillable = ['title', 'filename', 'thumb', 'category_id', 'user_id', 'status', 'slug'];

     public function category(){
    	return $this->belongsTo('App\PortCategory', 'category_id');
    }

     public function user(){
    	return $this->belongsTo('App\User');
    }

    public function scopeSearch($query, $title)
    {
        // Remember to add Namespace::search($request->$title)orderBy('id', 'DESCC')->paginate(5);
        // In the controller
        return $query->where('title', 'LIKE', "%$title%");

    }
}
