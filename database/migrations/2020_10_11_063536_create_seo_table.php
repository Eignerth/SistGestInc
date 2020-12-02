<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoTable extends Migration
{
    
    public function up()
    {
       /*  Schema::create('seo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idkbs')->constrained('knowledgebases');
            $table->string('tittle',50);
            $table->string('keyword',100);
            $table->index(['tittle','keyword']);
            $table->timestamps();
        }); */
    }

    
    public function down()
    {
        Schema::dropIfExists('seo');
    }
}
