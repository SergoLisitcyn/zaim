<?php

use yii\db\Migration;

/**
 * Class m220202_205915_update_table_banks_data_kz
 */
class m220202_205915_update_table_banks_data_kz extends Migration
{
    public function up()
    {
        $this->addColumn('banks', 'data_kz', $this->text()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('banks', 'data_kz');
    }
}
