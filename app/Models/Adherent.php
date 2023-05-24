<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adherent extends Authenticatable
{
    use HasFactory;

    protected $table = "Adherent";
    protected $primaryKey = "idAdherent";
    public $timestamps = false;

    protected $fillable = ['nom', 
    'prenom', 'adresse', 
    'CP', 'ville', 'telephone',
    'courriel', 'photo', 'dateNaissance', 
    'dateEntree', 'adhesionRenouvelee', 'idC', 'password'];

    public function Personnel(){
        return $this->hasOne(Personnel::class,'idAdherent');
    }

    public function CategorieAge(){
        return $this->belongsTo(CategorieAge::class,'idAdherent');
    }

    public function Reservation(){
        return $this->belongsToMany('App\Models\Reservation', 'RESERVER', 'idAdherent', 'idReserv')
        ->withPivot('absence');
    }

    public function getAuthPassword(){
        return $this->password;
    }


}

?>