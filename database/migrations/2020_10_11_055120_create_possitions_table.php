<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePossitionsTable extends Migration
{
    
    public function up()
    {
        Schema::create('possitions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idareas')->constrained('areas');
            $table->string('description',200)->nullable(false)->unique();
            $table->text('addnote')->nullable();
            $table->integer('level')->default(0);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('possitions');
    }
}
