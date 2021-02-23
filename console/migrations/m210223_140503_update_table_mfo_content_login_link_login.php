<?php

use yii\db\Migration;

/**
 * Class m210223_140503_update_table_mfo_content_login_link_login
 */
class m210223_140503_update_table_mfo_content_login_link_login extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'login_content', $this->text()->defaultValue(null));
        $this->addColumn('mfo', 'login_link', $this->string()->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'login_content');
        $this->dropColumn('mfo', 'login_link');
    }
}
