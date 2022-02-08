<?php

$this->title = 'Обновить';
$this->params['breadcrumbs'][] = ['label' => 'МФО', 'url' => ['index']];
?>
<div class="banks-update">
    <h1>Обновлено: <?= $dataRu['countUpdate'] ?></h1>
    <h1>Добавлено новых RU: <?= $dataRu['countSave'] ?></h1>
</div>