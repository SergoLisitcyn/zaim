<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'МФО - Главная страница';
?>
<div class="mfo-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?=
            \kartik\grid\GridView::widget([
                'pjax' => true,
                'dataProvider' => $dataProvider,
                'hover'=>true,
                'options' => [
                    'style' => 'text-align:center',
                ],
                'panel' => [
                    'type'=>'default',
                    'beforeOptions' => ['style' => 'text-align: left!important'],
//                    'before'=> Html::button('<i class="glyphicon glyphicon-refresh"></i> Обновить', ['class' => 'btn btn-material btn-grey', 'onclick' => '$.pjax.reload({container: \'#w0-pjax\'});']),
                    'after'=> "",
                ],
                'summary' => "<span style='padding:6px;border-radius:4px; color:#222d32'>Всего: <b>{totalCount}</b></span><span style='padding:6px;border-radius:4px;color:#222d32;margin-left:20px;'>Отображается: <b>{begin} - {end}</b></span>",
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'mfo_name',
                    [
                        'class' => 'kartik\grid\EditableColumn',
                        'attribute' => 'status',
                        'hAlign' => 'center',
                        'filter' => false,
                        'editableOptions' =>  function ($model, $key, $index) {
                            return [
                                'header' => 'сортировку',
                                'inputType' => 'dropDownList',
                                'data' => [0 =>'Неактивен',1 =>'Активен',2 => 'Активен.Партнерская ссылка отключена.'],
                            ];
                        },
                        'value' => function($model){
                            if($model->status == 0){
                                return 'Неактивен';
                            } elseif($model->status == 1) {
                                return 'Активен';
                            } elseif ($model->status == 2){
                                return 'Активен.Партнерская ссылка отключена';
                            }
                            return 'Неактивен';
                        },
                    ],
                    [
                        'class' => 'kartik\grid\EditableColumn',
                        'attribute' => 'sort',
                        'hAlign' => 'center',
                        'filter' => false,
                        'value' => function($model){ return $model->sort; },
                    ],
                    [
                        'class' => 'kartik\grid\EditableColumn',
                        'attribute' => 'link_offer',
                        'vAlign' => 'middle',
                        'value' => function($model){ return $model->link_offer; },
                    ],
                    [
                        'class' => '\kartik\grid\ActionColumn',
                        'deleteOptions' => ['label' => '<i class="glyphicon glyphicon-remove"></i>']
                    ]
                ],

            ]);
            ?>
</div>
