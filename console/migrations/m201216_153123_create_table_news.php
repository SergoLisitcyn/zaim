<?php

use yii\db\Migration;

/**
 * Class m201216_153123_create_table_news
 */
class m201216_153123_create_table_news extends Migration
{
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'content' => $this->text(),
            'text_content' => $this->text(),
            'images' => $this->string(),
            'url' => $this->string()->notNull(),
            'date' => $this->dateTime(),
            'sort' => $this->integer(11)->defaultValue(0),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('news');
    }
}
