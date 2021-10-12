<?php

use yii\db\Migration;

/**
 * Class m211012_181840_update_table_news
 */
class m211012_181840_update_table_news extends Migration
{
    public function up()
    {
        $this->addColumn('news', 'title_seo', $this->string(255)->defaultValue(null));
        $this->addColumn('news', 'description', $this->string(255)->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('news', 'title_seo');
        $this->dropColumn('news', 'description');
    }
}
