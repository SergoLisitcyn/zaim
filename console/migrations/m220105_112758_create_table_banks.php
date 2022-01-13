<?php

use yii\db\Migration;

/**
 * Class m220105_112758_create_table_banks
 */
class m220105_112758_create_table_banks extends Migration
{
    public function up()
    {
        $this->createTable('banks', [
            'id' => $this->primaryKey(),
            'data' => $this->json()->null(),
            'image' => $this->string()->null(),
            'sort' => $this->integer()->notNull()->defaultValue(0),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('banks');
    }
}
