<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKbfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kbfiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idkbs')->constrained('knowledgebases');
            $table->foreignId('idcommentkbds')->nullable(true)->constrained('commentkbs');
            $table->foreignId('idpersonals')->constrained('personals');
            $table->string('tittle');
            $table->text('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kbfiles');
    }
}
