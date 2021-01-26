<?php

use yii\db\Migration;

/**
 * Class m210126_084247_update_table_mfo_repayment_extension_loan
 */
class m210126_084247_update_table_mfo_repayment_extension_loan extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'advanced_repayment', $this->integer(1)->defaultValue(0));
        $this->addColumn('mfo', 'extension_loan', $this->integer(1)->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'advanced_repayment');
        $this->dropColumn('mfo', 'extension_loan');
    }
}
