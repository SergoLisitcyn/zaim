<div class="header-body__col header-body__col--city">
    <div class="header-city">
        <span>Выбрать	город</span>
        <ul>
            <?php foreach ($cities as $city ) : ?>
            <li><a href="<?= $city['url'] ?>"><?= $city['name'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
