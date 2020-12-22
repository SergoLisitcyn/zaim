<?php

use yii\db\Migration;

/**
 * Class m201210_091902_create_table_sale
 */
class m201210_091902_create_table_sale extends Migration
{
    public function up()
    {
        $this->createTable('sale', [
            'id' => $this->primaryKey(),
            'mfo_id' => $this->integer(11),
            'name' => $this->string()->notNull(),
            'content' => $this->text(),
            'srok_ot' => $this->datetime()->defaultValue(null),
            'srok_do' => $this->datetime()->defaultValue(null),
            'url' => $this->string()->notNull(),
            'sort' => $this->integer(11)->defaultValue(0),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('sale');
    }
}
