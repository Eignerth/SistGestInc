<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idpersonals')->constrained('personals');
            $table->string('subject',200);
            $table->longText('message');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
