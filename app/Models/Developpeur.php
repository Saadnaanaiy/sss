<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Developpeur extends Model
{
    protected $table = "developpeurs";
    protected $primaryKey = "idD";
    protected $fillable = ["nomD", "prenomD", "cv", "photoD"];

    public function taches(){
        return $this->hasMany(Tache::class, "idD", "idD");
    }
}
