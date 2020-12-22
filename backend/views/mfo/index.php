<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'МФО';
?>
<div class="mfo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<i class="fa fa-plus"></i> Создать МФО', ['create'], ['class' => 'mbtn mbtn-success']) ?>
    </p>

    <?=
            \kartik\grid\GridView::widget([
                'pjax' => true,
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'hover'=>true,
                'options' => [
                    'style' => 'text-align:center',
                ],
                'panel' => [
                    'type'=>'default',
                    'beforeOptions' => ['style' => 'text-align: left!important'],
                    'before'=> \yii\helpers\Html::button('<i class="glyphicon glyphicon-refresh"></i> Обновить', ['class' => 'btn btn-material btn-grey', 'onclick' => '$.pjax.reload({container: \'#w0-pjax\'});']),
                    'after'=> "",
                ],
                'summary' => "<span style='padding:6px;border-radius:4px; color:#222d32'>Всего: <b>{totalCount}</b></span><span style='padding:6px;border-radius:4px;color:#222d32;margin-left:20px;'>Отображается: <b>{begin} - {end}</b></span>",
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'mfo_name',
                    [
                        'class' => 'kartik\grid\EditableColumn',
                        'attribute' => 'status',
                        'vAlign' => 'middle',
//                        'width' => '210px',
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
