<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MainPageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Main Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-page-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Main Page', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'sub_title',
            'description',
//            'registration_text:ntext',
            //'registration_item:ntext',
            //'how_take_title',
            //'how_take_text',
            //'how_take_text_left',
            //'how_take_text_right',
            //'how_take_point_title',
            //'how_take_point_text:ntext',
            //'advantages_title',
            //'advantages_text:ntext',
            //'advantages_list_1:ntext',
            //'advantages_list_2:ntext',
            //'advantages_list_3:ntext',
            //'advantages_list_4:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
