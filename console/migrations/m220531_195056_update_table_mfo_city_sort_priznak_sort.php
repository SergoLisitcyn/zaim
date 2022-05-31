<?php

use yii\db\Migration;

/**
 * Class m220531_195056_update_table_mfo_city_sort_priznak_sort
 */
class m220531_195056_update_table_mfo_city_sort_priznak_sort extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'city_sort', $this->integer(11)->defaultValue(9999));
        $this->addColumn('mfo', 'priznak_sort', $this->integer(11)->defaultValue(9999));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'city_sort');
        $this->dropColumn('mfo', 'priznak_sort');
    }
}
