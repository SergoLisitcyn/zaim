<?php

use yii\db\Migration;

/**
 * Class m211126_195501_create_table_links
 */
class m211126_195501_create_table_links extends Migration
{
    public function up()
    {
        $this->createTable('links', [
            'id' => $this->primaryKey(),
            'ru' => $this->string()->notNull(),
            'kz' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('links');
    }
}
