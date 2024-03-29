<?php if ($data['info']['fintech'] || $data['info']['amfok']) : ?>
<div class="mfo-about__logos">
    <h2 class="mfo-about-title info-subtitle" style="padding-bottom: 20px;">Кәсіби бірлестіктерге мүшелік:</h2>
    <?php if($data['info']['amfok']) :  ?>
        <noindex>
            <a class="mfo-about__logos-link" rel="nofollow" target="_blank">
                <noscript>
                    <img src="/img/mfo/logo_amfok.png" alt="Объединение юридических лиц «Ассоциация микрофинансовых организаций Казахстана»">
                </noscript>
                <img class="lazyloaded" src="/img/mfo/logo_amfok.png" data-src="/img/mfo/logo_amfok.png" alt="Объединение юридических лиц «Ассоциация микрофинансовых организаций Казахстана»">
            </a>
        </noindex>
    <?php endif; ?>
    <?php if($data['info']['fintech']) :  ?>
        <noindex>
            <a class="mfo-about__logos-link" rel="nofollow" target="_blank">
                <noscript>
                    <img src="/img/mfo/logo_kazfin.png" alt="Объединение юридических лиц «Казахстанская Ассоциация ФинТех»">
                </noscript>
                <img class="lazyloaded" src="/img/mfo/logo_kazfin.png" data-src="/img/mfo/logo_kazfin.png" alt="Объединение юридических лиц «Казахстанская Ассоциация ФинТех»">
            </a>
        </noindex>
    <?php endif; ?>
</div>
<?php endif; ?>