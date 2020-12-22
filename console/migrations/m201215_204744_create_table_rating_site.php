<?php

use yii\db\Migration;

/**
 * Class m201215_204744_create_table_rating_site
 */
class m201215_204744_create_table_rating_site extends Migration
{
    public function up()
    {
        $this->createTable('rating_site', [
            'id' => $this->primaryKey(),
            'rating' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('rating_site');
    }
}
