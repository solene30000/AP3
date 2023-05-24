<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    protected $table = "Seance";
    protected $primaryKey = "idSeance";
    public $timestamps = false;

    protected $fillable = ['dateSeance', 
    'heureDeb', 'heureFin' ];

    public function Film(){
        return $this->belongsTo(Film::class, 'idFilm');
    }
    
    public function Reservation(){
        return $this->hasMany('App\Models\Reservation', 'idReservation');
    }
}

?>