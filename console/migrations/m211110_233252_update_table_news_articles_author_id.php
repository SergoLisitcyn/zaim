<?php

use yii\db\Migration;

/**
 * Class m211110_233252_update_table_news_articles_author_id
 */
class m211110_233252_update_table_news_articles_author_id extends Migration
{
    public function up()
    {
        $this->addColumn('news', 'author_id', $this->integer(11));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('news', 'author_id');
    }
}
