<?php

use yii\db\Migration;

/**
 * Class m210808_213501_update_table_mfo_gesv
 */
class m210808_213501_update_table_mfo_gesv extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'gesv', $this->string(255)->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'gesv');
    }
}
