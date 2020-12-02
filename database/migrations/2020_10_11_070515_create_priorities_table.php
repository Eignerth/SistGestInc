<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrioritiesTable extends Migration
{
    
    public function up()
    {
        Schema::create('priorities', function (Blueprint $table) {
            $table->id();
            $table->string('description',50)->nullable(false)->unique();
            $table->char('color',7)->nullable(false)->unique();
            $table->integer('level')->nullable(false)->unique();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('priorities');
    }
}
