<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',200)->nullable(false)->unique();
            $table->char('ruc',11)->nullable(false)->unique();
            $table->string('address')->nullable();
            $table->string('telf',15)->nullable();
            $table->string('cel',15)->nullable();
            $table->string('email')->nullable();
            $table->string('sector',100)->nullable();
            $table->text('addnote')->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
