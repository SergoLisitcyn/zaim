<?php

use yii\db\Migration;

/**
 * Class m210708_202812_create_table_main_page
 */
class m210708_202812_create_table_main_page extends Migration
{
    public function up()
    {
        $this->dropTable('main_page');
        $this->createTable('main', [
            'id' => $this->primaryKey(),
            'section_1' => $this->text(),
            'section_2' => $this->text(),
            'section_3' => $this->text(),
            'section_4' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('main');
    }
}
