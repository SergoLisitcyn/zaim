<?php

use yii\db\Migration;

/**
 * Class m211115_174821_update_table_city
 */
class m211115_174821_update_table_city extends Migration
{
    public function up()
    {
        $this->addColumn('city', 'title_h1', $this->string(255)->defaultValue(null));
        $this->addColumn('city', 'title', $this->string(255)->defaultValue(null));
        $this->addColumn('city', 'description', $this->string(255)->defaultValue(null));
        $this->addColumn('city', 'keywords', $this->string(255)->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('city', 'title_h1');
        $this->dropColumn('city', 'title');
        $this->dropColumn('city', 'description');
        $this->dropColumn('city', 'keywords');
    }
}
