<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTksupportdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tksupportd', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idtksupportm')->constrained('tksupportm');
            $table->unsignedInteger('numberactivity');
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
        Schema::dropIfExists('tksupportd');
    }
}
