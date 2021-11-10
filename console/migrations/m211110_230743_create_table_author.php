<?php

use yii\db\Migration;

/**
 * Class m211110_230743_create_table_author
 */
class m211110_230743_create_table_author extends Migration
{
    public function up()
    {
        $this->createTable('author', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'image' => $this->string(255)->defaultValue(null),
            'description' => $this->string()->notNull(),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('author');
    }
}
