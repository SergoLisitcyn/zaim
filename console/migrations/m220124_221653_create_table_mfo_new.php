<?php

use yii\db\Migration;

/**
 * Class m220124_221653_create_table_mfo_new
 */
class m220124_221653_create_table_mfo_new extends Migration
{
    public function up()
    {
        $this->createTable('mfo_new', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'url' => $this->string(255)->notNull(),
            'data' => $this->text()->null(),
            'desc' => $this->string(255)->null(),
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
        $this->dropTable('mfo_new');
    }
}
