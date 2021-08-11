<?php

use yii\db\Migration;

/**
 * Class m210811_195429_update_table_mfo_login
 */
class m210811_195429_update_table_mfo_login extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'title_login', $this->string(255)->defaultValue(null));
        $this->addColumn('mfo', 'title_description', $this->string(255)->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'title_login');
        $this->dropColumn('mfo', 'title_description');
    }
}
