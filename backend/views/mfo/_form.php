<?php

use yii\helpers\Html;
use \common\models\City;
use \kartik\select2\Select2;
use \yii\helpers\ArrayHelper;
use vova07\imperavi\Widget;
use \yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Mfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <div class="col-xs-12">
        <div class="jobs-box">
            <div class="header">
                <span>Создать новое МФО</span>
            </div>
            <div class="content">

                <?php $form = \yii\bootstrap\ActiveForm::begin([
                    'layout' => 'horizontal',
                    'options' => ['enctype' => 'multipart/form-data'],
                    'fieldConfig' => [
                        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                        'horizontalCssClasses' => [
                        'label' => 'col-sm-3',
                        'offset' => 'col-sm-offset-3',
                        'wrapper' => 'col-sm-9',
                        'error' => '',
                        'hint' => '',
                        ],
                    ],
                ]);
                ?>

                <div class="row">
                    <div class="col-xs-6">

                        <h4 class="bold uppercase">1. МФО</h4>
                        <?= $form->field($model, 'mfo_name')->textInput(['maxlength' => true, 'disabled' => true]) ?>

                        <?= $form->field($model, 'url')->textInput(['maxlength' => true, 'disabled' => true])->hint('например 4slovo') ?>

                        <div class="form-group field-mfo-logo_file">
                            <label class="control-label col-sm-4" for="mfo-logo_file"></label>
                            <div class="col-sm-8">
                                <?php if($model->logo) : ?>
                                <img src="<?= $model->logo ?>" class="img_slider_view" alt="Image" style="height: 100px">
                                <?php else: ?>
                                <b>Логотип отсутствует</b>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php
                        echo $form->field($model, 'logo_file')->widget(\kartik\file\FileInput::classname(), [
                            'options' => [
                                'accept' => 'image/*',
                                'multiple' => false
                            ],
                            'pluginOptions' => [
                                'showPreview' => false,
                                'showRemove' => true,
                                'showUpload' => false
                            ]
                        ]);
                        ?>


                        <?= $form->field($model, 'rating')->textInput(['maxlength' => true])->hint('Только цифры и точка(например 4.8)') ?>


                        <?= $form->field($model, 'link_offer')->textInput(['maxlength' => true]) ?>


                        <?= $form->field($model, 'max_sum_calc')->textInput(['maxlength' => true])->hint('Для калькулятора и страницы рейтинга') ?>

                        <?= $form->field($model, 'min_sum_calc')->textInput(['maxlength' => true])->hint('Для калькулятора и страницы рейтинга') ?>

                        <?= $form->field($model, 'max_term_calc')->textInput(['maxlength' => true])->hint('Для калькулятора и страницы рейтинга') ?>
                        <?= $form->field($model, 'min_term_calc')->textInput(['maxlength' => true])->hint('Для калькулятора и страницы рейтинга') ?>
<!--                        --><?php //$form->field($model, 'akcii')->checkbox(['value' => 1, 'uncheck' => 0]) ?>

                        <?= $form->field($model, 'home_page')->checkbox(['value' => 1, 'uncheck' => 0]) ?>

                        <?= $form->field($model, 'advanced_repayment')->checkbox(['value' => 1, 'uncheck' => 0,'disabled' => true]) ?>

                        <?= $form->field($model, 'extension_loan')->checkbox(['value' => 1, 'uncheck' => 0,'disabled' => true]) ?>

                    </div>

                    <div class="col-xs-6">

                        <h4 class="bold uppercase">2. «Контактная информация»</h4>

<!--                        --><?php //$form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

<!--                        --><?php //$form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'text_video')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>
                        <div class="form-group field-mfo-logo_file">
                            <label class="control-label col-sm-4" for="mfo-logo_file"></label>
                            <div class="col-sm-8">
                                <?php if($model->certificate) : ?>
                                    <img src="<?= $model->certificate ?>" class="img_slider_view" alt="Image" style="height: 100px">
                                <?php else: ?>
                                    <b>Сертификат отсутствует</b>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php
                        echo $form->field($model, 'certificate_file')->widget(\kartik\file\FileInput::classname(), [
                            'options' => [
//                                'accept' => 'image/*',
                                'multiple' => false
                            ],
                            'pluginOptions' => [
                                'showPreview' => false,
                                'showRemove' => true,
                                'showUpload' => false
                            ]
                        ]);
                        ?>

<!--                        --><?php //$form->field($model, 'rekvisit')->widget(Widget::className(), [
//                            'settings' => [
//                                'lang' => 'ru',
//                                'minHeight' => 200,
//                                'formatting' => ['p', 'blockquote', 'h2', 'h1'],
//                                'attributes' => [
//                                    [
//                                        'attribute' => 'text',
//                                        'format' => 'html'
//                                    ]
//                                ],
//                                'plugins' => [
//                                    'clips',
//                                    'fullscreen'
//                                ]
//
//                            ]
//                        ])?>

                        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'status')->dropDownList([
                            '1' => 'Активен',
                            '0' => 'Неактивен'
                        ]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h4 class="bold uppercase">Подраздел “Условия общие”</h4>

                        <?= $form->field($model, 'srok')->textInput(['maxlength' => true])->hint('например 7 - 30 дней') ?>

                        <?= $form->field($model, 'sum')->textInput(['maxlength' => true])->hint('например 10 000 - 130 000') ?>

                        <?= $form->field($model, 'stavka')->textInput(['maxlength' => true])->hint('например от 0,01 %') ?>

                        <?= $form->field($model, 'gesv')->textInput(['maxlength' => true])->hint('например от 7,3%') ?>

                        <?= $form->field($model, 'odobrenie')->textInput()->hint('только цифры без знака %') ?>

                        <?= $form->field($model, 'rasmotrenie')->textInput(['maxlength' => true])->hint('например 10 минут') ?>
                    </div>
                    <div class="col-xs-6">

                        <h4 class="bold uppercase">Подраздел “Условия Новый клиент”</h4>

                        <?= $form->field($model, 'srok_new_client')->textInput(['maxlength' => true])->hint('например 7 - 30 дней') ?>

                        <?= $form->field($model, 'sum_new_client')->textInput(['maxlength' => true])->hint('например 10 000 - 130 000') ?>

                        <?= $form->field($model, 'stavka_new_client')->textInput(['maxlength' => true])->hint('например от 0,01 %') ?>

                        <?= $form->field($model, 'odobrenie_new_client')->textInput()->hint('только цифры без знака %') ?>

                        <?= $form->field($model, 'rasmotrenie_new_client')->textInput(['maxlength' => true])->hint('например 10 минут') ?>
                    </div>
                    <div class="col-xs-6">
                        <h4 class="bold uppercase">Подраздел “Условия Существующий клиент”</h4>

                        <?= $form->field($model, 'srok_for_client')->textInput(['maxlength' => true])->hint('например 7 - 30 дней') ?>

                        <?= $form->field($model, 'sum_for_client')->textInput(['maxlength' => true])->hint('например 10 000 - 130 000') ?>

                        <?= $form->field($model, 'stavka_for_client')->textInput(['maxlength' => true])->hint('например от 0,01 %') ?>

                        <?= $form->field($model, 'odobrenie_for_client')->textInput()->hint('только цифры без знака %') ?>

                        <?= $form->field($model, 'rasmotrenie_for_client')->textInput(['maxlength' => true])->hint('например 10 минут') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">

                        <h4 class="bold uppercase">3. Фильтры</h4>
                            <?php $typeCredits = \common\models\Filters::find()->with('typeCredits')->all();
                               foreach ($typeCredits as $value){
                                   if($value['name'] == 'Онлайн кредит түрі'){
                                       $filterName = 'Вид кредита онлайн';
                                   } elseif ($value['name'] == 'Алу тәсілі'){
                                       $filterName = 'Способ получения';
                                   } elseif ($value['name'] == 'Өтеу тәсілі'){
                                       $filterName = 'Способ погашения';
                                   } elseif ($value['name'] == 'Жұмыспен қамтылу түрі'){
                                       $filterName = 'Тип занятости';
                                   } elseif ($value['name'] == 'Қарыз мерзімі'){
                                       $filterName = 'Срок займа';
                                   } else {
                                       $filterName = $value['name'];
                                   }
                                   echo $form->field($model, 'type_credit_arr['.$value['id'].']',['options'=>['class'=>'col-xs-12']])->widget(Select2::classname(), [
                                       'data' => ArrayHelper::map($value->typeCredits,'id','name'),
                                       'language' => 'ru',
                                       'options' => ['placeholder' => 'Выбрать '.$value['name'].'', 'multiple' => true],
                                       'pluginOptions' => [
                                           'allowClear' => true,
                                       ],
                                   ])
                                       ->label($filterName)
                                   ;
                               }
                            ?>

                        <?php echo $form->field($model, 'mfo_city_arr',['options'=>['class'=>'col-xs-12']])->widget(Select2::classname(), [
                            'data' => ArrayHelper::map(City::find()->all(),'id','name'),
                            'language' => 'ru',
                            'options' => ['placeholder' => 'Выбрать города ...', 'multiple' => true],
                            'pluginOptions' => [
                                'allowClear' => true,
                            ],
                        ]); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-12">

                        <h4 class="bold uppercase">4. Описание компании</h4>


                        <?= $form->field($model, 'about_company')->textarea(['rows' => 6]) ?>

                        <?= $form->field($model, 'content')->widget(Widget::className(), [
                            'settings' => [
                                'lang' => 'ru',
                                'minHeight' => 200,
                                'formatting' => ['p', 'blockquote', 'h2', 'h1'],
                                'attributes' => [
                                    [
                                        'attribute' => 'text',
                                        'format' => 'html'
                                    ]
                                ],
                                'plugins' => [
                                    'clips',
                                    'fullscreen'
                                ]

                            ]
                        ])?>

                    </div>

                    <div class="col-xs-6">

                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">

                        <h4 class="bold uppercase">5. Личный кабинет</h4>


                        <?= $form->field($model, 'login_link')->textInput(['maxlength' => true])->hint('ссылка на личноый кабинет мфо(https://moneyman.kz/secure/registration?partner=smartzaimkz&utm_source=smartzaim&utm_medium=affiliate)') ?>

<!--                        --><?php //$form->field($model, 'title_login')->textInput(['maxlength' => true])->hint('Для СЕО на странице личный кабинет') ?>

<!--                        --><?php //$form->field($model, 'title_description')->textInput(['maxlength' => true])->hint('Для СЕО на странице личный кабинет') ?>

                        <?= $form->field($model, 'login_content')->widget(Widget::className(), [
                            'settings' => [
                                'lang' => 'ru',
                                'minHeight' => 300,
                                'formatting' => ['p', 'blockquote', 'h2', 'h1'],
                                'imageUpload' => Url::to(['/mfo/save-redactor-img','sub'=>'content']),
                                'attributes' => [
                                    [
                                        'attribute' => 'text',
                                        'format' => 'html'
                                    ]
                                ],
                                'plugins' => [
                                    'clips',
                                    'fullscreen'
                                ]

                            ]
                        ])?>

                    </div>

                    <div class="col-xs-6">

                    </div>
                </div>

                <div class="form-group center" style="text-align: center">
                    <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'mbtn mbtn-success' : 'mbtn mbtn-primary']) ?>
                </div>

                <?php \yii\bootstrap\ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
