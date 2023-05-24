<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = "Reservation";
    protected $primaryKey = "idReserv";
    public $timestamps = false;

    protected $fillable = ['absence'];

    public function evenement(){
        return $this-> belongsTo(Evenements::class,'idEv');
    }

    public function Adherent(){
        return $this->belongsToMany('App\Models\Adherent', 'RESERVER', 'idReserv', 'idAdherent');
    } 

    public function CategorieAge(){
        return $this->belongsTo(CategorieAge::class,'idC');
    }

    public function CategorieFilm(){
        return $this->belongsTo(CategorieFilm::class,'idCat');
    }

    public function Seance(){
        return $this->belongsTo(Seance::class,'idSeance');
    }

    public function Tarif(){
        return $this->belongsTo(Tarif::class,'idTarif');
    }

    public function Reservation(){
        return $this->belongsToMany('App\Models\Adherent', 'absence', 'idReserv', 'idAdherent')
        ->withPivot('absence');
    }
}

?>