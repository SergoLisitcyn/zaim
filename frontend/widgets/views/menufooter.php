<div class="footer__col">
    <ul class="footer__menu" style="padding-left: 0">
        <?php foreach ($menus as $menu) :?>
        <li><a href="<?= $menu->link; ?>"><?= $menu->name; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
