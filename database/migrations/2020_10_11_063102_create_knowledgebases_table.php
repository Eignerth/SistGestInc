<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnowledgebasesTable extends Migration
{
    
    public function up()
    {
        /* Schema::create('knowledgebases', function (Blueprint $table) {
            $table->id();
            $table->string('subject',100)->nullable(false);
            $table->longText('message')->nullable(false);
            $table->foreignId('idmenus')->constrained('menus');
            $table->foreignId('idpersonals')->constrained('personals');
            $table->foreignId('idstatuskbs')->constrained('statuskbs');
            $table->timestamps();
        }); */
    }

    
    public function down()
    {
        Schema::dropIfExists('knowledgebases');
    }
}
