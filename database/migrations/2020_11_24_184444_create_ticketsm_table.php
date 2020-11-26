<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsmTable extends Migration
{
    public function up()
    {
        Schema::create('ticketsm', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idareas')->constrained('areas');
            $table->char('serie')->nullable(false);
            $table->unsignedInteger('num')->default(0);
            $table->boolean('flgstatus');
            $table->unique(['idareas','serie']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ticketsm');
    }
}
