<?php

use yii\db\Migration;

/**
 * Class m201214_211310_update_table_type_credit
 */
class m201214_211310_update_table_type_credit extends Migration
{
    public function up()
    {
        $this->addColumn('type_credit', 'parent_id', $this->integer(11)->after('id'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('type_credit', 'parent_id');
    }
}
