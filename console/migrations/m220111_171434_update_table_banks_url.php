<?php

use yii\db\Migration;

/**
 * Class m220111_171434_update_table_banks_url
 */
class m220111_171434_update_table_banks_url extends Migration
{
    public function up()
    {
        $this->addColumn('banks', 'url', $this->string(255)->notNull());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('banks', 'url');
    }
}
