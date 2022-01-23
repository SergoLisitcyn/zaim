<?php

use yii\db\Migration;

/**
 * Class m220122_233132_update_table_banks_ustav
 */
class m220122_233132_update_table_banks_ustav extends Migration
{
    public function up()
    {
        $this->addColumn('banks', 'ustav', $this->string()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('banks', 'ustav');
    }
}
