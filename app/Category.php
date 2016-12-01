<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['name'];

    public function ebooks(){
    	return $this->hasMany('App\Ebook');
    }

}
