<?php

use yii\db\Migration;

/**
 * Class m211026_182018_update_table_reviews
 */
class m211026_182018_update_table_reviews extends Migration
{
    public function up()
    {
        $this->dropColumn('review', 'date');
        $this->addColumn('review', 'date', $this->string(255)->defaultValue(null));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('review', 'date');
    }
}
