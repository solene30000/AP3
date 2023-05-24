<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieFilm extends Model
{
    use HasFactory;

    protected $table = "CategorieFilm";
    protected $primaryKey = "idCat";
    public $timestamps = false;

    protected $fillable = ['nomCat'];

    public function CategorieAge(){
        return $this->hasMany('App\Models\CategorieAge', 'idCat');
    }

    public function Reservation(){
        return $this->hasMany('App\Models\Reservation', 'idCat');
    }

    public function Film(){
        return $this->hasMany('App\Models\Film', 'idCat');
    }
}

?>