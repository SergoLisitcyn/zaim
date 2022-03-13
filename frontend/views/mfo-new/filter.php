<?php

use \yii\helpers\Url;
use frontend\widgets\GridCatalog;


$this->title = 'Mfo News';
?>
<div>
    <?php echo GridCatalog::widget(['output' => $mfo,'mfoNew' => true]); ?>
</div>
