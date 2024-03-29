<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKindidentificationsTable extends Migration
{
    
    public function up()
    {
        Schema::create('kindidentifications', function (Blueprint $table) {
            $table->id();
            $table->char('abbreviation',3)->unique();
            $table->string('description',100)->unique();
            $table->integer('ndigits');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('kindidentifications');
    }
}
