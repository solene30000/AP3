<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    use HasFactory;

    protected $table = "Reunion";
    protected $primaryKey = "idReunions";
    public $timestamps = false;

    protected $fillable = ['dateReunion', 'objectReunion' ];

    public function ListeOrdonnee(){
        return $this->hasMany('App\Models\ListeOrdonnee','idReunions')
    }

    public function Personnel(){
        return $this->belongsToMany('App\Models\Personnel', 'CONVOQUER', 'idReunions', 'idAdherent');
    } 
}

?>