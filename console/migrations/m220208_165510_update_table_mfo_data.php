<?php

use yii\db\Migration;

/**
 * Class m220208_165510_update_table_mfo_data
 */
class m220208_165510_update_table_mfo_data extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'data_ru', $this->text()->null());
        $this->addColumn('mfo', 'data_kz', $this->text()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'data_ru');
        $this->dropColumn('mfo', 'data_kz');
    }
}
