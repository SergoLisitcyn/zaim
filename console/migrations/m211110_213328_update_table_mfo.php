<?php

use yii\db\Migration;

/**
 * Class m211110_213328_update_table_mfo
 */
class m211110_213328_update_table_mfo extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'certificate', $this->string(255)->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'certificate');
    }
}
