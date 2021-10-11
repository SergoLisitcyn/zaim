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
            <li>
                <span	class="aside-list__date">15.11.2020</span>
                <a href="#"	class="aside-list__title">Власти	Казахстана проверят	подозрительные	денежные	интернет-переводы на	причастность к	наркобизнесу</a>
            </li>
            <li>
                <span	class="aside-list__date">08.11.2020</span>
                <a href="#"	class="aside-list__title">Moneyman	появился	уполномоченный по	правам клиентов</a>
            </li>
            <li>
                <span	class="aside-list__date">01.11.2020</span>
                <a href="#"	class="aside-list__title">Средняя	заработная плата	казахстанских	докторов вырастет до	561 000 теңге к 2023	году</a>
            </li>
        </ul>
        <a href="#" target="_blank"	rel="nofollow">
            <div	class="mfo_card_button">Барлық жаңалықтар</div>
        </a>
    </div>
</div>