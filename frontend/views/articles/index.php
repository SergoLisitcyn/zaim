<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ArticlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пайдалы материалдар';
?>
    <section class="breadcrumbs plr">
        <div class="breadcrumbs-wrap limit-width">
            <ul class="breadcrumbs__items">
                <li>
                    <a href="/">Онлайн қарыздар</a>
                </li>
                <li>
                    Пайдалы материалдар
                </li>
            </ul>
        </div>
    </section>


    <section class="content plr">
        <div class="content-wrap limit-width">
            <div class="content-row">
                <div class="content-box">
                    <div class="content-info">
                        <div class="content-main-info">
                            <div class="content-main-info__item">
                                <h1>📰 Пайдалы материалдар</h1>
                                <div class="email_container">
                                    <div class="text_top_subscribe_container">Сілтемеге жазылыңыз және акциялар мен арнайы<br> ұсыныстар туралы алғашқылардың бірі болып біліңіз</div>
                                    <div class="subscribe-top-item-wrap">
                                        <div	class="subscribe-top-item subscribe-top-item--input-email">
                                            <input	class="subscribe-top-item__control subscribe-top-item__control--input-email"	placeholder="Email"	type="text"	name="email"	value=""></div>
                                        <div	class="subscribe-top-item subscribe-top-item--btn-submit">
                                            <input	class="subscribe-top-item__btn subscribe-top-item__btn--btn-submit"	type="submit"	value="Қол қою">
                                        </div>
                                    </div>
                                </div>
                                <div class="aktsii-list__container">
                                    <?php foreach ($articles as $article) :?>
                                        <div class="aktsii-list__item">
                                            <div class="aktsii-item">
                                                <a href="<?= \yii\helpers\Url::toRoute(['articles/view', 'url' => $article->url]) ?>" class="aktsii-item__link">
                                                    <div class="aktsii-item__img-wrap">
                                                        <a href="<?= \yii\helpers\Url::toRoute(['articles/view', 'url' => $article->url]) ?>">
                                                            <img src="<?= $article->preview_image ?>" data-lazy-type="image" data-lazy-src="<?= $article->preview_image ?>" alt="<?= $article->name ?>" class="lazy aktsii-item__img lazy-loaded">
                                                        </a>
                                                        <noscript>
                                                            <img src="<?= $article->preview_image ?>" alt="" class="aktsii-item__img">
                                                        </noscript>
                                                    </div>
                                                    <a href="<?= \yii\helpers\Url::toRoute(['articles/list', 'url' => $article->url]) ?>">
                                                        <h3 class="aktsii-item__title"><?= $article->name ?></h3>
                                                    </a>
                                                </a>
                                                <div class="aktsii-item__date"><?= date('m.d.Y',strtotime($article->date_publish)) ?></div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <ul class="pagination">
                                    <li>
                                        <a href="#" class="page-numbers current">1</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <?= \frontend\widgets\ContentSideBar::widget(); ?>

            </div>
        </div>
    </section>