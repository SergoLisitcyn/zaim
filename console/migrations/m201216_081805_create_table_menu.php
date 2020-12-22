<?php

use yii\db\Migration;

/**
 * Class m201216_081805_create_table_menu
 */
class m201216_081805_create_table_menu extends Migration
{
    public function up()
    {
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'zone' => $this->string()->defaultValue('footer'),
            'link' => $this->string()->notNull(),
            'status' => $this->integer(1)->defaultValue(1),
            'sort' => $this->integer(11)->defaultValue(0),
        ]);
    }
    public function down()
    {
        $this->dropTable('menu');
    }
}
