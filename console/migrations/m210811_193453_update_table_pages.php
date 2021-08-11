<?php

use yii\db\Migration;

/**
 * Class m210811_193453_update_table_pages
 */
class m210811_193453_update_table_pages extends Migration
{
    public function up()
    {
        $this->addColumn('pages', 'title_seo', $this->string(255)->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('pages', 'title_seo');
    }
}
