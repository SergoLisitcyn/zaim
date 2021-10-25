<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <section class="main-title">
        <h1 class="title">404</h1>
        <h2 class="subtitle">Упс! Что-то пошло не так…</h2>
        <h3 class="descr">Страница не найдена. Пожалуйста, выберите</h3>
    </section>
    <?php echo \frontend\widgets\GridCatalog::widget(['input' => 'homepage']); ?>

</div>
