<?php

namespace App\Http\Controllers;

use App\Models\Developpeur;
use App\Models\Projet;
use App\Models\Tache;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class TestController extends Controller
{
    public function index() {
        $devs = Developpeur::all();
        $devs_Sophie = Developpeur::where("prenomD", "Jean")->get();
        $projets = Projet::where('nomP', 'like', '%Projet Beta%')
            ->orWhere('description', 'like', '%
Site web e-commerce pour produits artisanaux%')
            ->get();

        $taches = Tache::where('coutHeure', '>', 50)
            ->orWhere('DureeHeure', '<', 10)
            ->get();

        $taches_query = Tache::where(function ($query) {
            $query->where("coutHeure", ">", 50)
                ->orWhere('dureeHeure', '<', 5);
        })->where("idp", 3)->get();

        $taches_dev = Tache::where("idD", 2)
            ->where(function ($query) {
                $query->where("coutHeure", ">", 100)
                      ->orWhere("dureeHeure" ,"<",20);
            })->get();

        $taches_cout = Tache::where("coutHeure", ">", 70)
            ->where(function ($query) {
                $query->where("dureeHeure", ">=" ,10)
                      ->where("dureeHeure", "<=", 20);
        })->get();


        $devs_with = Developpeur::with("taches")->get();

        $devs_projet = Projet::with("taches")->get();

        $taches_devs = Tache::with("developpeur")->get();

        $devs_taches_projet = Developpeur::with("taches.projet")->get();

        $devs_has = Developpeur::has("taches")->get();

        $projet_whereHas = Projet::whereHas("taches", function ($query) {
            $query->where("coutHeure", ">", 100);
        })->get();

        return view("Test", compact("devs", "devs_Sophie", "projets", "taches", "taches_query", "taches_dev", "taches_cout", "devs_with", "devs_projet", "taches_devs", "devs_taches_projet", "devs_has", "projet_whereHas"));
    }
}
