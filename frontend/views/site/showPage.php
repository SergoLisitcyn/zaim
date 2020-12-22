<?php
if(isset($model->title) and !empty($model->title)) { $this->title = $model->title; }
if(isset($model->keywords) and !empty($model->keywords)) { $this->registerMetaTag(['name' => 'keywords','content' => $model->keywords]); }
if(isset($model->description) and !empty($model->description)) { $this->registerMetaTag(['name' => 'description','content' => $model->description]); }

$this->params['breadcrumbs'][] = $model->name;
?>

<div class="pages <?php echo $model->slug ?>">
    <h1><?php echo $model->name ?></h1>
    <div class="pages-content"><?php echo $model->content ?></div>
</div>
