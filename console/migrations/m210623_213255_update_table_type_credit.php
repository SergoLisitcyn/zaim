<?php

use yii\db\Migration;

/**
 * Class m210623_213255_update_table_type_credit
 */
class m210623_213255_update_table_type_credit extends Migration
{
    public function up()
    {
        $this->addColumn('type_credit', 'title', $this->string(255)->defaultValue(null));
        $this->addColumn('type_credit', 'content', $this->text());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('type_credit', 'title');
        $this->dropColumn('type_credit', 'content');
    }
}
