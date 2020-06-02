<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //atriduto correpodiendo
    protected $table = "category";
    protected $primaryKey = "category_id";
    public $timestamps = false;

    public function peliculas(){
        return $this->belongsToMany('App\Pelicula', 'film_category', 'category_id', 'film_id');

    }
}