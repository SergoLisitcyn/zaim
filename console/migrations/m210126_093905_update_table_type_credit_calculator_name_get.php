<?php

use yii\db\Migration;

/**
 * Class m210126_093905_update_table_type_credit_calculator_name_get
 */
class m210126_093905_update_table_type_credit_calculator_name_get extends Migration
{
    public function up()
    {
        $this->addColumn('type_credit', 'calc_name', $this->string());
        $this->addColumn('type_credit', 'calc_get_url', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('type_credit', 'calc_name');
        $this->dropColumn('type_credit', 'calc_get_url');
    }
}
