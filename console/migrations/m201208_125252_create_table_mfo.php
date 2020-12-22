<?php

use yii\db\Migration;

/**
 * Class m201208_125252_create_table_mfo
 */
class m201208_125252_create_table_mfo extends Migration
{
    public function up()
    {
        $this->createTable('mfo', [
            'id' => $this->primaryKey(),
            'mfo_name' => $this->string()->notNull(),
            'rating' => $this->decimal(10,1)->defaultValue(0),
            'srok' => $this->string()->notNull()->defaultValue(0),
            'sum' => $this->string()->notNull()->defaultValue(0),
            'stavka' => $this->string()->notNull(),
            'odobrenie' => $this->integer(11)->defaultValue(0),
            'rasmotrenie' => $this->string()->notNull()->defaultValue(0),
            'phone' => $this->string(),
            'email' => $this->string(),
            'website' => $this->string(),
            'logo' => $this->string()->null(),
            'video' => $this->string()->null(),
            'rekvisit' => $this->text(),
            'akcii' => $this->integer(1)->defaultValue(0),
            'home_page' => $this->integer(1)->defaultValue(0),
            'link_offer' => $this->string()->null(),
            'about_company' => $this->text(),
            'content' => $this->text(),
            'title' => $this->string()->notNull(),
            'description' => $this->string()->null(),
            'keywords' => $this->string()->null(),
            'status' => $this->integer(1)->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('mfo');
    }
}
