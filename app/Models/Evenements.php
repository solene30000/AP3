<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenements extends Model
{
    use HasFactory;

    protected $table = "Evenements";
    protected $primaryKey = "idEv";
    public $timestamps = false;

    protected $fillable = ['typeEv', 'nomEv', '
    descriptionEv', 'dateDeb', 'dateFin', 
    'placeDispo', 'TauxReduc' ];


    public function reservation(){
        return $this->hasMany('App\Models\Reservation', 'idReserv');
    }

    public function Personnel(){
        return $this->belongsToMany('App\Models\Personnel', 'ANIMER', 'idEv', 'idAdherent');
    } 
}

?>