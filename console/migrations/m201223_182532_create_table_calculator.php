<?php

use yii\db\Migration;

/**
 * Class m201223_182532_create_table_calculator
 */
class m201223_182532_create_table_calculator extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('calculator', [
            'id' => $this->primaryKey(),
            'min_sum' => $this->integer()->notNull(),
            'max_sum' => $this->integer()->notNull(),
            'step_sum' => $this->integer()->notNull(),
            'min_srok' => $this->integer()->notNull(),
            'max_srok' => $this->integer()->notNull(),
            'step_srok' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('calculator');
    }
}
