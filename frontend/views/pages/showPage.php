<?php
if(isset($model->title_seo) && !empty($model->title)) { $this->title = $model->title_seo; }
if(isset($model->keywords) && !empty($model->keywords)) { $this->registerMetaTag(['name' => 'keywords','content' => $model->keywords]); }
if(isset($model->description) && !empty($model->description)) { $this->registerMetaTag(['name' => 'description','content' => $model->description]); }
?>
<style>
    .content-info h1 {
        padding-bottom: 20px;
        margin-bottom: 14px;
        border-bottom: 1px dotted #4792ca;
        font-weight: 500;
        text-align: left!important;
        color: #303133!important;
        font-size: 36px;
    }

</style>

<section class="content plr" style="background: #f7f7f7;margin-top: 0">
    <div class="content-wrap limit-width">
        <div class="content-row">
            <div class="content-box" style="width: 100%;">
                <div class="content-info" style="background: #f7f7f7;">
                    <div class="pages <?php echo $model->slug ?>">
                        <h1><?php echo $model->name ?></h1>
                        <div class="pages-content"><?php echo $model->content ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>