<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTksupportmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tksupportm', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idcontacts')->constrained('contacts');
            $table->foreignId('idclassifications')->constrained('classifications');
            $table->foreignId('idpriorities')->constrained('priorities');
            $table->string('subject')->nullable(false);
            $table->longText('message')->nullable(false);
            $table->foreignId('idproducts')->constrained('products');
            $table->foreignId('idchannels')->constrained('channels');
            $table->foreignId('idstatusincs')->constrained('statusincs');
            $table->date('registerdate');
            $table->date('registerexpiration');
            $table->unsignedBigInteger('duration');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tksupportm');
    }
}
