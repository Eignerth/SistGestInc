<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idtickets')->constrained('tickets');
            $table->unsignedInteger('ntracingtk');
            $table->foreignId('idclassifications')->constrained('classifications');
            $table->foreignId('idpriorities')->constrained('priorities');
            $table->foreignId('idpersonals')->constrained('personals');
            $table->longText('description')->nullable(false);
            $table->foreignId('idstatusincs')->constrained('statusincs');
            $table->date('registerdate');
            $table->date('registerexpiration');
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
        Schema::dropIfExists('tracings');
    }
}
