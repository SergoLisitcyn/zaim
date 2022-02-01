<?php

use yii\db\Migration;

/**
 * Class m220201_181434_update_table_banks
 */
class m220201_181434_update_table_banks extends Migration
{
    public function up()
    {
        $this->addColumn('banks', 'content', $this->text()->null());
        $this->alterColumn('banks', 'desc', $this->text()->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('banks', 'content');
    }
}
