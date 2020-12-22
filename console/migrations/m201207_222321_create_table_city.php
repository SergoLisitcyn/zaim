<?php

use yii\db\Migration;

/**
 * Class m201207_222321_create_table_city
 */
class m201207_222321_create_table_city extends Migration
{
    public function up()
    {
        $this->createTable('city', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'url' => $this->string()->notNull(),
            'sort' => $this->integer(11)->defaultValue(0),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('city');
    }
}
