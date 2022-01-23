<?php

use yii\db\Migration;

/**
 * Class m220122_222219_create_table_banks_review
 */
class m220122_222219_create_table_banks_review extends Migration
{
    public function up()
    {
        $this->createTable('bank_review', [
            'id' => $this->primaryKey(),
            'bank_id' => $this->integer(11)->notNull(),
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
        $this->dropTable('bank_review');
    }
}
