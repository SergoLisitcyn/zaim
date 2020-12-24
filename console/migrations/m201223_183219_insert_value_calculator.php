<?php

use yii\db\Migration;

/**
 * Class m201223_183219_insert_value_calculator
 */
class m201223_183219_insert_value_calculator extends Migration
{
    public function up()
    {
        $this->insert('calculator', [
            'id' => 1,
            'min_sum' => 0,
            'max_sum' => 300000,
            'step_sum' => 1000,
            'min_srok' => 0,
            'max_srok' => 60,
            'step_srok' => 1,
        ]);
    }

    public function down()
    {

        $this->delete('calculator', [
            'id' => 1,
        ]);
    }
}
