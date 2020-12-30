<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('name',200)->nullable(false)->unique();
            $table->foreignId('idkindident')->constrained('kindidentifications');
            $table->string('kindident',25)->nullable(false)->unique();
            $table->char('ruc',11)->nullable();
            $table->string('telf',15)->nullable();
            $table->string('cel',15)->nullable();
            $table->string('ownemail')->nullable(false);
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->date('dateborn')->nullable(true);
            $table->foreignId('idpossitions')->nullable()->constrained('possitions')->nullable(true);
            $table->text('addnote')->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('personals');
    }
}
