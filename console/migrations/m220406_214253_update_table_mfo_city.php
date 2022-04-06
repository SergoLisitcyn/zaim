<?php

use yii\db\Migration;

/**
 * Class m220406_214253_update_table_mfo_city
 */
class m220406_214253_update_table_mfo_city extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'city_kz', $this->string()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'city_kz');
    }
}
