<?php

use yii\db\Migration;

/**
 * Class m210128_222725_update_table_mfo
 */
class m210128_222725_update_table_mfo extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'mfo_city_array', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'mfo_city_array');
    }
}
