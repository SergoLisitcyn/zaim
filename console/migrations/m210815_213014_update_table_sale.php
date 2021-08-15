<?php

use yii\db\Migration;

/**
 * Class m210815_213014_update_table_sale
 */
class m210815_213014_update_table_sale extends Migration
{
    public function up()
    {
        $this->addColumn('sale', 'partner_link', $this->string(255)->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('sale', 'partner_link');
    }
}
