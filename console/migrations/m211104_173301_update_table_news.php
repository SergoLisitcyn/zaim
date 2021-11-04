<?php

use yii\db\Migration;

/**
 * Class m211104_173301_update_table_news
 */
class m211104_173301_update_table_news extends Migration
{
    public function up()
    {
        $this->dropColumn('news', 'date');
        $this->addColumn('news', 'date', $this->string(255)->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('news', 'date', $this->string(255)->defaultValue(null));
    }
}
