<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieAge extends Model
{
    use HasFactory;

    protected $table = "CategorieAge";
    protected $primaryKey = "idC";
    public $timestamps = false;

    protected $fillable = ['ageMin', 'tauxRed' ];

    public function Adherent(){
        return $this->hasMany('App\Models\Adherent', 'idAdherent');
    }

    public function Reservation(){
        return $this->hasMany('App\Models\Reservation', 'idC');
    }

    public function CategorieFilm(){
        return $this->belongsTo(CategorieFilm::class,'idCat');
    }

    public function Tarif(){
        return $this->belongsTo(Tarif::class,'idTarif');
    }
}

?>