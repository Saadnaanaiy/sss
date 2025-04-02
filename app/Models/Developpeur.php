<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Developpeur extends Model
{
    protected $table = "developpeurs";
    protected $primaryKey = "idDev";
    protected $fillable = ["nomDev", "prenomDev", "cv", "photoDev"];

    public function taches(){
        return $this->hasMany(Tache::class, "idDev", "idDev");
    }
}
