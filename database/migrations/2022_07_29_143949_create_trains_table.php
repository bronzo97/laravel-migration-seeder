<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string("Azienda", 40);
            $table->string("Stazione di partenza", 40);
            $table->string("Stazione di arrivo", 40);
            $table->time("Orario di partenza", 0);
            $table->time("Orario di arrivo", 0);
            $table->integer("Codice treno");
            $table->tinyInteger("Numero carrozze");
            $table->boolean("In orario")->default(1);
            $table->boolean("Cancellato")->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
