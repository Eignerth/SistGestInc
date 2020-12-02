<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuboptionTable extends Migration
{
    
    public function up()
    {
        Schema::create('suboptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idoptions')->constrained('options');
            $table->string('description',100)->nullable(false);
            $table->unique(['idoptions','description']);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('suboptions');
    }
}
