<?php

use yii\db\Migration;

/**
 * Class m201214_211922_create_table_filters
 */
class m201214_211922_create_table_filters extends Migration
{
    public function up()
    {
        $this->createTable('filters', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'status' => $this->integer(1)->defaultValue(1),
            'sort' => $this->integer(11)->defaultValue(0),
        ]);
    }

    public function down()
    {
        $this->dropTable('filters');
    }
}
