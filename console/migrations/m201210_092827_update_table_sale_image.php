<?php

use yii\db\Migration;

/**
 * Class m201210_092827_update_table_sale_image
 */
class m201210_092827_update_table_sale_image extends Migration
{
    public function up()
    {
        $this->addColumn('sale', 'image', $this->string()->notNull());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('sale', 'image');
    }
}
