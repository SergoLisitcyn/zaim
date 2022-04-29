<?php

use yii\db\Migration;

/**
 * Class m220429_164647_update_table_mfo_words
 */
class m220429_164647_update_table_mfo_words extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'letter', $this->string()->null());
        $this->addColumn('mfo', 'letter_get', $this->string()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'letter');
        $this->dropColumn('mfo', 'letter_get');
    }
}
