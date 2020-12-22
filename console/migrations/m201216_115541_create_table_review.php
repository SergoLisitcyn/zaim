<?php

use yii\db\Migration;

/**
 * Class m201216_115541_create_table_review
 */
class m201216_115541_create_table_review extends Migration
{
    public function up()
    {
        $this->createTable('review', [
            'id' => $this->primaryKey(),
            'cat_id' => $this->integer(11)->notNull(),
            'body' => $this->text(),
            'plus' => $this->text(),
            'minus' => $this->text(),
            'prostota' => $this->decimal(2,1)->notNull(),
            'speed' => $this->decimal(2,1)->notNull(),
            'support' => $this->decimal(2,1)->notNull(),
            'email' => $this->string(),
            'name_client' => $this->string(),
            'otvet_review' => $this->text(),
            'date' => $this->dateTime(),
            'status' => $this->integer(1)->defaultValue(0),
        ]);
    }
    public function down()
    {
        $this->dropTable('review');
    }
}
