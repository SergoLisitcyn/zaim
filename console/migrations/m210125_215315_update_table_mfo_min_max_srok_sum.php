<?php

use yii\db\Migration;

/**
 * Class m210125_215315_update_table_mfo_min_max_srok_sum
 */
class m210125_215315_update_table_mfo_min_max_srok_sum extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'max_sum_calc', $this->integer(11)->defaultValue(0));
        $this->addColumn('mfo', 'min_sum_calc', $this->integer(11)->defaultValue(0));
        $this->addColumn('mfo', 'max_term_calc', $this->integer(11)->defaultValue(0));
        $this->addColumn('mfo', 'min_term_calc', $this->integer(11)->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'max_sum_calc');
        $this->dropColumn('mfo', 'min_sum_calc');
        $this->dropColumn('mfo', 'max_term_calc');
        $this->dropColumn('mfo', 'min_term_calc');
    }
}
