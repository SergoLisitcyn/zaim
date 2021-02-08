<?php

use yii\db\Migration;

/**
 * Class m210208_223031_update_table_mfo_srok
 */
class m210208_223031_update_table_mfo_srok extends Migration
{

    public function up()
    {
        $this->addColumn('mfo', 'srok_new_client', $this->string());
        $this->addColumn('mfo', 'sum_new_client', $this->string());
        $this->addColumn('mfo', 'stavka_new_client', $this->string());
        $this->addColumn('mfo', 'odobrenie_new_client', $this->string());
        $this->addColumn('mfo', 'rasmotrenie_new_client', $this->string());
        $this->addColumn('mfo', 'srok_for_client', $this->string());
        $this->addColumn('mfo', 'sum_for_client', $this->string());
        $this->addColumn('mfo', 'stavka_for_client', $this->string());
        $this->addColumn('mfo', 'odobrenie_for_client', $this->string());
        $this->addColumn('mfo', 'rasmotrenie_for_client', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'srok_new_client');
        $this->dropColumn('mfo', 'sum_new_client');
        $this->dropColumn('mfo', 'stavka_new_client');
        $this->dropColumn('mfo', 'odobrenie_new_client');
        $this->dropColumn('mfo', 'rasmotrenie_new_client');
        $this->dropColumn('mfo', 'srok_for_client');
        $this->dropColumn('mfo', 'sum_for_client');
        $this->dropColumn('mfo', 'stavka_for_client');
        $this->dropColumn('mfo', 'odobrenie_for_client');
        $this->dropColumn('mfo', 'rasmotrenie_for_client');
    }

}
