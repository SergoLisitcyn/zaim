<?php

use yii\db\Migration;

/**
 * Class m220203_171007_create_table_banks_data
 */
class m220203_171007_create_table_banks_data extends Migration
{
    public function up()
    {
        $this->createTable('bank_data', [
            'id' => $this->primaryKey(),
            'data_menu_ru' => $this->text()->null(),
            'data_menu_kz' => $this->text()->null(),
            'data_bank_ru' => $this->text()->null(),
            'data_bank_kz' => $this->text()->null(),
            'data_tag_ru' => $this->text()->null(),
            'data_tag_kz' => $this->text()->null(),
            'name' => $this->string(255)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('bank_data');
    }
}
