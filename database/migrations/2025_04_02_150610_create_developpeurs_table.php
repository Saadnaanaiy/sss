<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('developpeurs', function (Blueprint $table) {
            $table->id("idD");
            $table->string("nomD");
            $table->string("prenomD");
            $table->string("cv");
            $table->string("photoD");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('developpeurs');
    }
};
