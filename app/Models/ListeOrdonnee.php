<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListeOrdonnee extends Model
{
    use HasFactory;

    protected $table = "ListeOrdonnee";
    protected $primaryKey = "idListe";
    public $timestamps = false;

    protected $fillable = ['IntituleOrdre' ];

    public function Reunion(){
        return $this->belongsTo(Reunion::class,'idReunions')
    }
}

?>