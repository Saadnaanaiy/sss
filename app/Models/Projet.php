<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $table = "projets";
    protected $primaryKey = "idP";
    protected $fillable = ["nomP", "description", "photoP"];

    public function taches(){
        return $this->hasMany(Tache::class, "idP", "idP");
    }
}
