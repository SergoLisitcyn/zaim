<?php

use yii\db\Migration;

/**
 * Class m250422_174639_update_table_articles_sale_url
 */
class m250422_174639_update_table_articles_sale_url extends Migration
{
    public function up()
    {
        $this->addColumn('articles', 'sale_url', $this->string()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('articles', 'sale_url');
    }
}
