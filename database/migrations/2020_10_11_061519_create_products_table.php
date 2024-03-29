<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->char('abbreviation',3)->unique()->nullable(false);
            $table->string('description',100)->unique()->nullable(false);
            $table->text('addnote')->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
