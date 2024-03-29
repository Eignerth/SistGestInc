<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassificationsTable extends Migration
{
    
    public function up()
    {
        Schema::create('classifications', function (Blueprint $table) {
            $table->id();
            $table->char('abbreviation',3)->unique()->nullable(false);
            $table->string('description',100)->unique()->nullable(false);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('classifications');
    }
}
