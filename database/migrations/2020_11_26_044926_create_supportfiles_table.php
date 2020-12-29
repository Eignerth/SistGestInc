<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportfilesTable extends Migration
{

    public function up()
    {
        Schema::create('supportfiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idtksupportms')->constrained('tksupportm')->cascadeOnDelete();
            $table->foreignId('idtksupportds')->nullable(true)->constrained('tksupportd');
            $table->foreignId('idpersonals')->constrained('personals');
            $table->string('tittle');
            $table->text('file');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('supportfiles');
    }
}
