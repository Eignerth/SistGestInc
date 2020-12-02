<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idcustomers')->constrained('customers');
            $table->string('name',200)->nullable(false);
            $table->string('email')->nullable(true);
            $table->string('telf',15)->nullable(true);
            $table->string('cel',15)->nullable(true);
            $table->string('possition',50)->nullable(true);
            $table->text('addnote')->nullable(true);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
