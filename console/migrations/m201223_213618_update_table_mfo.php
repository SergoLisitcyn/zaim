<?php

use yii\db\Migration;

/**
 * Class m201223_213618_update_table_mfo
 */
class m201223_213618_update_table_mfo extends Migration
{
    public function up()
    {
        $this->addColumn('mfo', 'url', $this->string()->notNull());
        $this->addColumn('mfo', 'sort', $this->integer(11)->defaultValue(0));
        $this->addColumn('mfo', 'text_video', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('mfo', 'url');
        $this->dropColumn('mfo', 'sort');
        $this->dropColumn('mfo', 'text_video');
    }
}
