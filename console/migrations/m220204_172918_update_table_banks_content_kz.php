<?php

use yii\db\Migration;

/**
 * Class m220204_172918_update_table_banks_content_kz
 */
class m220204_172918_update_table_banks_content_kz extends Migration
{
    public function up()
    {
        $this->addColumn('banks', 'content_kz', $this->text()->null());
        $this->addColumn('banks', 'desc_kz', $this->text()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('banks', 'content_kz');
        $this->dropColumn('banks', 'desc_kz');
    }
}
