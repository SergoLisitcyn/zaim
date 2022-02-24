<?php

use yii\db\Migration;

/**
 * Class m220222_171342_update_table_mfo_data_kz
 */
class m220222_171342_update_table_mfo_data_kz extends Migration
{
    public function up()
    {
        $this->addColumn('mfo_data', 'data_menu_kz', $this->text()->null());
        $this->addColumn('mfo_data', 'data_mfo_kz', $this->text()->null());
        $this->addColumn('mfo_data', 'data_tag_kz', $this->text()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo_data', 'data_menu_kz');
        $this->dropColumn('mfo_data', 'data_mfo_kz');
        $this->dropColumn('mfo_data', 'data_tag_kz');
    }
}
