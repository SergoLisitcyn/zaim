<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mfos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mfo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mfo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'mfo_name',
            'rating',
            'srok',
            'sum',
            //'stavka',
            //'odobrenie',
            //'rasmotrenie',
            //'phone',
            //'email:email',
            //'website',
            //'logo',
            //'video',
            //'rekvisit:ntext',
            //'akcii',
            //'home_page',
            //'link_offer',
            //'about_company:ntext',
            //'content:ntext',
            //'title',
            //'description',
            //'keywords',
            //'status',
            //'created_at',
            //'updated_at',
            //'type_credit_array',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
