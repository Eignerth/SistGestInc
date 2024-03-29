<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmenuTable extends Migration
{
    
    public function up()
    {
        Schema::create('submenus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idmenus')->constrained('menus');
            $table->string('description',100)->nullable(false);
            $table->unique(['idmenus','description']);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('submenus');
    }
}
