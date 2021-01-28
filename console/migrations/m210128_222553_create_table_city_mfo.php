<?php

use yii\db\Migration;

/**
 * Class m210128_222553_create_table_city_mfo
 */
class m210128_222553_create_table_city_mfo extends Migration
{
    public function up()
    {
        $this->createTable('mfo_city', [
            'id' => $this->primaryKey(),
            'mfo_id' => $this->integer(11),
            'city_id' => $this->integer(11),
        ]);
    }

    public function down()
    {
        $this->dropTable('mfo_city');
    }
}
