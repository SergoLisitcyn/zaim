<?php

use yii\db\Migration;

/**
 * Class m220130_220053_create_table_mfo_data
 */
class m220130_220053_create_table_mfo_data extends Migration
{
    public function up()
    {
        $this->createTable('mfo_data', [
            'id' => $this->primaryKey(),
            'data_menu' => $this->text()->null(),
            'data_mfo' => $this->text()->null(),
            'data_tag' => $this->text()->null(),
            'name' => $this->string(255)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('mfo_data');
    }
}
