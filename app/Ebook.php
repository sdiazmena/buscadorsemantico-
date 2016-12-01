<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    protected $table = "ebooks";

    protected $fillable = ['id', 'name', 'ruta', 'descripcion', 'users_id', 'category_id', 'tipo', 'original_id'];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
