<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = "Film";
    protected $primaryKey = "idFilm";
    public $timestamps = false;

    protected $fillable = ['titre', 'duree' ];

    public function CategorieFilm(){
        return $this->belongsTo(CategorieFilm::class,'idCat');
    }

    public function Seance(){
        return $this->hasMany('App\Models\Seance', 'idSeance');
    }
}

?>