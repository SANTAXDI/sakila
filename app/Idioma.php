<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Idioma extends Model
{
    protected $table = "language";
    protected $primaryKey = "language_id";
    public $timestampas = false;

    public function peliculas (){
        return $this->hasMany("App\Pelicula", "language_id");
    }

}
