<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentkbsTable extends Migration
{
    
    public function up()
    {
        Schema::create('commentkbs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idkbs')->constrained('knowledgebases');
            $table->foreignId('idpersonals')->constrained('personals');
            $table->longText('message');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('commentkbs');
    }
}
