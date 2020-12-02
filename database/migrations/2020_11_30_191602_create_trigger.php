<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrigger extends Migration
{

    public function up()
    {
        DB::unprepared('CREATE TRIGGER `tksupportm_AFTER_INSERT` AFTER INSERT ON `tksupportm` FOR EACH ROW
        BEGIN
            SET @num = (select num from ticketsm where id = NEW.idticketsm order by num asc limit 1);
            
            update ticketsm set num=@num+1 where id=NEW.idticketsm;  
        END');
    }


    public function down()
    {
        Schema::dropIfExists('DROP TRIGGER `tksupportm_AFTER_INSERT`');
    }
}
