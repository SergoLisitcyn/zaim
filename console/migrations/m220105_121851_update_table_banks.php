<?php

use yii\db\Migration;

/**
 * Class m220105_121851_update_table_banks
 */
class m220105_121851_update_table_banks extends Migration
{
    public function up()
    {
        $this->addColumn('banks', 'name', $this->string(255)->notNull());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('banks', 'name');
    }
}
