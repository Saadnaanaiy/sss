<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $table = "taches";
    protected $primaryKey = "idT";
    protected $fillable = ["idP", "idDev", "duree", "coutHeure", "etat"];

    public function projet()
    {
        return $this->belongsTo(Projet::class, "idP", "idP");
    }

    public function developpeur()
    {
        return $this->belongsTo(Developpeur::class, "idDev", "idDev");
    }
}
