<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;

    protected $table = "Tarif";
    protected $primaryKey = "idTarif";
    public $timestamps = false;

    protected $fillable = ['TarifDeBase', 'tauxRedBase' ];

    public function CategorieAge(){
        return $this->hasMany('App\Models\CategorieAge', 'idCat');
    }

    public function Reservation(){
        return $this->hasMany('App\Models\Reservation', 'idReservation');
    }
}

?>