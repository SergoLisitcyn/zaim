<?php

use yii\db\Migration;

/**
 * Class m220405_193452_update_table_mfo_bin_mfo_name
 */
class m220405_193452_update_table_mfo_bin_mfo_name extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'bin', $this->string()->null());
        $this->addColumn('mfo', 'mfo_name_kz', $this->string()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'bin');
        $this->dropColumn('mfo', 'mfo_name_kz');
    }
}
