<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefticketsTable extends Migration
{
    
    public function up()
    {
       /*  Schema::create('reftickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idkbs')->constrained('knowledgebases');
            $table->foreignId('idtksupportm')->constrained('tksupportm');
            $table->foreignId('idpersonals')->constrained('personals');
            $table->text('message');
            $table->timestamps();
        }); */
    }

    
    public function down()
    {
        Schema::dropIfExists('reftickets');
    }
}
