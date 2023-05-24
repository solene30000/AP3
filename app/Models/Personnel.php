<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use  App\Models\Adherent;

class Personnel extends Adherent
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "Personnel";
    protected $primaryKey = "idAdherent";
    public $timestamps = false;

    protected $fillable = [
        'idAdherent',
        'specialite',
        'remplacement',
        'dernierDiplome',
        'nbAnneeExperience',
    ];

    public function Adherent(){
        return $this->hasOne(Adherent::class,'idAdherent');
    }

    public function Evenements(){
        return $this->belongsToMany('App\Models\Evenements', 'ANIMER', 'idAdherent', 'idEv');
    } 

    public function Reunion(){
        return $this->belongsToMany('App\Models\Reunion', 'CONVOQUER', 'idAdherent', 'idReunions');
    } 

}
