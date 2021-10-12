<div class="mfo_card">
    <div class="mfo_card__title">Пайдалы материалдар</div>
    <div class="mfo_card__info">
        <ul class="aside-list">
            <?php foreach ($articles as $article) :?>
            <li>
                <span class="aside-list__date"><?= $article['date_publish'] ?></span>
                <a href="<?= \yii\helpers\Url::toRoute(['articles/view', 'url' => $article->url]) ?>"	class="aside-list__title"><?= $article['name'] ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <a href="/articles"	class="btn-yellow">Барлық мақалалар</a>
    </div>
</div>
<div class="mfo_card">
    <div class="mfo_card__title">Соңғы жаңалықтар</div>
    <div class="mfo_card__info">
        <ul class="aside-list">
            <?php foreach ($news as $new) :?>
                <li>
                    <span class="aside-list__date"><?= date('d.m.Y',strtotime($new['date'])) ?></span>
                    <a href="<?= \yii\helpers\Url::toRoute(['news/view', 'url' => $new->url]) ?>"	class="aside-list__title"><?= $new['name'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="/news" target="_blank"	rel="nofollow">
            <div	class="mfo_card_button">Барлық жаңалықтар</div>
        </a>
    </div>
</div>