<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortCategory extends Model
{
    protected $table = "port_categories";

    protected $fillable = ['name'];

    public function article()
    {
    	return $this->hasMany('App\PortArticle', 'category_id');
    }

    public function scopeSearchPortCategory($query, $name)
    {
    	return $query->where('name','=', $name);
    }
}
