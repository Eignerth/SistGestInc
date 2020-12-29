<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKbtkrefsTable extends Migration
{
    public function up()
    {
        Schema::create('kbreftks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idkbs')->constrained('knowledgebases')->cascadeOnDelete();
            $table->foreignId('idtksupportm')->constrained('tksupportm')->cascadeOnDelete();
            $table->unique(['idkbs','idtksupportm']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kbreftks');
    }
}
