<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTksupportmTable extends Migration
{
    // TKC-SOP-123456   
    public function up()
    {
        Schema::create('tksupportm', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idticketsm')->nullable(false)->constrained('ticketsm');
            $table->char('serie',14)->unique();
            $table->foreignId('idpersonals')->nullable(false)->constrained('personals');
            $table->foreignId('idcontacts')->nullable(false)->constrained('contacts');
            $table->foreignId('idclassifications')->nullable(false)->constrained('classifications');
            $table->foreignId('idpriorities')->nullable(false)->constrained('priorities');
            $table->string('subject')->nullable(false);
            $table->longText('message')->nullable(false);
            $table->foreignId('idproducts')->constrained('products');
            $table->foreignId('idchannels')->constrained('channels');
            $table->foreignId('idtkstatus')->constrained('tkstatus');
            $table->date('registerdate')->nullable(false);
            $table->time('registertime')->nullable(false);
            $table->date('expirationdate')->nullable(true);
            $table->time('expirationtime')->nullable(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tksupportm');
    }
}
