<?php

use yii\db\Migration;

/**
 * Class m210811_185851_update_table_type_credit
 */
class m210811_185851_update_table_type_credit extends Migration
{
    public function up()
    {
        $this->addColumn('type_credit', 'title_seo', $this->string(255)->defaultValue(null));
        $this->addColumn('type_credit', 'description', $this->string(255)->defaultValue(null));
        $this->addColumn('type_credit', 'keywords', $this->string(255)->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('type_credit', 'title_seo');
        $this->dropColumn('type_credit', 'description');
        $this->dropColumn('type_credit', 'keywords');
    }
}
