<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewListKbsViews extends Migration
{
    public function up()
    {
        DB::statement("CREATE OR REPLACE VIEW `gestinc`.`list_kbs` AS
                SELECT 
        `gestinc`.`knowledgebases`.`id` AS `id`,
        `gestinc`.`knowledgebases`.`subject` AS `subject`,
        `gestinc`.`knowledgebases`.`message` AS `message`,
        `gestinc`.`personals`.`name` AS `personal`,
        `gestinc`.`products`.`description` AS `product`,
        `gestinc`.`menus`.`description` AS `menu`,
        `gestinc`.`submenus`.`description` AS `submenu`,
        `gestinc`.`options`.`description` AS `optionn`,
        `gestinc`.`knowledgebases`.`created_at` AS `fecCreated`
        FROM
        (((((`gestinc`.`knowledgebases`
        JOIN `gestinc`.`products` ON ((`gestinc`.`knowledgebases`.`idproducts` = `gestinc`.`products`.`id`)))
        LEFT JOIN `gestinc`.`menus` ON ((`gestinc`.`knowledgebases`.`idmenus` = `gestinc`.`menus`.`id`)))
        LEFT JOIN `gestinc`.`submenus` ON ((`gestinc`.`knowledgebases`.`idsubmenus` = `gestinc`.`submenus`.`id`)))
        LEFT JOIN `gestinc`.`options` ON ((`gestinc`.`knowledgebases`.`idoptions` = `gestinc`.`options`.`id`)))
        JOIN `gestinc`.`personals` ON ((`gestinc`.`knowledgebases`.`idpersonals` = `gestinc`.`personals`.`id`)))");
    }

    public function down()
    {
        Schema::dropIfExists('list_kbs');
    }
}
