<?php

use yii\db\Migration;

/**
 * Class m211002_121147_create_table_articles
 */
class m211002_111147_create_table_articles extends Migration
{
    public function up()
    {
        $this->createTable('articles', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'preview_image' => $this->string(255)->defaultValue(null),
            'content' => $this->text(),
            'date_publish' => $this->string(255)->notNull(),
            'url' => $this->string()->notNull(),
            'title_seo' => $this->string(255)->defaultValue(null),
            'description' => $this->string(255)->defaultValue(null),
            'user_id' => $this->integer(11)->defaultValue(null),
            'sort' => $this->integer(11)->defaultValue(0),
            'status' => $this->integer(1)->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable('articles');
    }
}
