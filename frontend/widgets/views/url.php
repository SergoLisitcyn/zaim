<?php if($output == 'hreflang') { ?>
    <link rel="alternate" href="<?php echo $linkRu?>" hreflang="ru-kz">
    <link rel="alternate" href="<?php echo $linkKz ?>" hreflang="kk-kz">
    <link rel="alternate" href="<?php echo $linkKz ?>" hreflang="x-default">
<?php } else { ?>
    <?php if($output == 'desktop') { ?>
    <a class="desktop-visible" href="<?php echo $linkRu?>" style="display: inline-block;vertical-align: top;text-align: center;line-height: 30px;">RU</a>
    <?php } else { ?>
    <a href="<?php echo $linkRu?>" style="display: inline-block;color: #337ab7;vertical-align: top;text-align: center;line-height: 28px;font-size: 16px;">RU</a>
    <?php } ?>
<?php } ?>