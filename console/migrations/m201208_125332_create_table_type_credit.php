<?php

use yii\db\Migration;

/**
 * Class m201208_125332_create_table_type_credit
 */
class m201208_125332_create_table_type_credit extends Migration
{
    public function up()
    {
        $this->createTable('type_credit', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'url' => $this->string()->notNull(),
            'sort' => $this->integer(11)->defaultValue(0),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('type_credit');
    }
}
