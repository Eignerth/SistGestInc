<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionTable extends Migration
{
    
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idsubmenus')->constrained('submenus');
            $table->string('description',100)->nullable(false);
            $table->unique(['idsubmenus','description']);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('options');
    }
}
