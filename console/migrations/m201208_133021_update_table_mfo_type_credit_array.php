<?php

use yii\db\Migration;

/**
 * Class m201208_133021_update_table_mfo_type_credit_array
 */
class m201208_133021_update_table_mfo_type_credit_array extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'type_credit_array', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'type_credit_array');
    }
}
