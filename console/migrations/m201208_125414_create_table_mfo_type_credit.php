<?php

use yii\db\Migration;

/**
 * Class m201208_125414_create_table_mfo_type_credit
 */
class m201208_125414_create_table_mfo_type_credit extends Migration
{
    public function up()
    {
        $this->createTable('mfo_type_credit', [
            'id' => $this->primaryKey(),
            'mfo_id' => $this->integer(11),
            'type_credit_id' => $this->integer(11),
        ]);
    }

    public function down()
    {
        $this->dropTable('mfo_type_credit');
    }
}
