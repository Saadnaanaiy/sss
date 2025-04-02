<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('taches', function (Blueprint $table) {
            $table->id("idT");
            $table->unsignedBigInteger("idP");
            $table->foreign("idP")->references("idP")->on("projets")->onDelete("cascade");
            $table->unsignedBigInteger("idD");
            $table->foreign("idD")->references("idD")->on("developpeurs")->onDelete("cascade");
            $table->float("dureeHeure");
            $table->float("coutHeure");
            $table->string("etat");
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('taches');
    }
};
