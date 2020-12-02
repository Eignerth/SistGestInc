<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatuskbsTable extends Migration
{
    
    public function up()
    {
        Schema::create('statuskbs', function (Blueprint $table) {
            $table->id();
            $table->string('description',100)->unique()->nullable(false);
            $table->string('color',50);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('statuskbs');
    }
}
