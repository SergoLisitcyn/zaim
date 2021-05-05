<?php

use yii\db\Migration;

/**
 * Class m210322_205659_create_table_main_page
 */
class m210322_205659_create_table_main_page extends Migration
{
    public function up()
    {
        $this->createTable('main_page', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'sub_title' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'registration_text' => $this->text(),
            'registration_item' => $this->text(),
            'how_take_title' => $this->string()->notNull(),
            'how_take_text' => $this->string()->notNull(),
            'how_take_text_left' => $this->string()->notNull(),
            'how_take_text_right' => $this->string()->notNull(),
            'how_take_point_title' => $this->string()->notNull(),
            'how_take_point_text' => $this->text(),
            'advantages_title' => $this->string()->notNull(),
            'advantages_text' => $this->text(),
            'advantages_list_1' => $this->text(),
            'advantages_list_2' => $this->text(),
            'advantages_list_3' => $this->text(),
            'advantages_list_4' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('main_page');
    }
}
