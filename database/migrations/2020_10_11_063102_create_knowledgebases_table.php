<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnowledgebasesTable extends Migration
{
    
    public function up()
    {
        Schema::create('knowledgebases', function (Blueprint $table) {
            $table->id();
            $table->string('subject',100)->nullable(false)->unique();
            $table->longText('message')->nullable(false);
            $table->foreignId('idproducts')->nullable(true)->constrained('products');
            $table->foreignId('idmenus')->nullable(true)->constrained('menus');
            $table->foreignId('idsubmenus')->nullable(true)->constrained('submenus');
            $table->foreignId('idoptions')->nullable(true)->constrained('options');
            $table->foreignId('idpersonals')->constrained('personals');
            $table->timestamps();
            $table->index('subject'); 
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('knowledgebases');
    }
}
