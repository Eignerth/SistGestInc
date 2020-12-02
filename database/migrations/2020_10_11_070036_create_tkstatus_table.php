<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTkstatusTable extends Migration
{
    
    public function up()
    {
        Schema::create('tkstatus', function (Blueprint $table) {
            $table->id();
            $table->string('description',100)->nullable(false)->unique();
            $table->string('color',50)->nullable(false);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tkstatus');
    }
}
