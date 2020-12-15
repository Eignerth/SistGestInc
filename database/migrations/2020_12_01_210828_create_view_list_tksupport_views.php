<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewListTksupportViews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE OR REPLACE VIEW `gestinc`.`list_tksupport` AS
        SELECT 
            `gestinc`.`tksupportm`.`id` AS `id`,
            `gestinc`.`tksupportm`.`serie` AS `serie`,
            `gestinc`.`contacts`.`name` AS `contacto`,
            `gestinc`.`customers`.`descripcion` AS `cliente`,
            `gestinc`.`tksupportm`.`registerdate` AS `fecregistro`,
            `gestinc`.`tksupportm`.`registertime` AS `horregistro`,
            `gestinc`.`tksupportm`.`expirationdate` AS `fectermino`,
            `gestinc`.`tksupportm`.`expirationtime` AS `hortermino`,
            `gestinc`.`tkstatus`.`description` AS `status`,
            `gestinc`.`classifications`.`description` AS `clasificacion`,
            `gestinc`.`priorities`.`description` AS `prioridad`,
            `gestinc`.`personals`.`name` AS `personal`,
            `gestinc`.`personals`.`email` AS `email`,
            `gestinc`.`tksupportm`.`subject` AS `asunto`,
            `gestinc`.`tksupportm`.`message` AS `mensaje`
        FROM
            ((((((`gestinc`.`tksupportm`
            JOIN `gestinc`.`contacts` ON ((`gestinc`.`tksupportm`.`idcontacts` = `gestinc`.`contacts`.`id`)))
            JOIN `gestinc`.`customers` ON ((`gestinc`.`contacts`.`idcustomers` = `gestinc`.`customers`.`id`)))
            JOIN `gestinc`.`tkstatus` ON ((`gestinc`.`tksupportm`.`idtkstatus` = `gestinc`.`tkstatus`.`id`)))
            JOIN `gestinc`.`classifications` ON ((`gestinc`.`tksupportm`.`idclassifications` = `gestinc`.`classifications`.`id`)))
            JOIN `gestinc`.`personals` ON ((`gestinc`.`tksupportm`.`idpersonals` = `gestinc`.`personals`.`id`)))
            JOIN `gestinc`.`priorities` ON ((`gestinc`.`tksupportm`.`idpriorities` = `gestinc`.`priorities`.`id`)))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW list_tksupport');
        //Schema::dropIfExists('DROP VIEW list_tksupport');
    }
}
