<?php

use yii\db\Migration;

/**
 * Class m211101_201040_update_table_sales
 */
class m211101_201040_update_table_sales extends Migration
{
    public function up()
    {
        $this->addColumn('sale', 'title_seo', $this->string(255)->defaultValue(null));
        $this->addColumn('sale', 'description', $this->string(255)->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('sale', 'title_seo');
        $this->dropColumn('sale', 'description');
    }
}
