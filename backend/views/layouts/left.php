<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- /.search form -->
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'МФО', 'icon' => 'book', 'url' => ['mfo/index']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Рубрики',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Новости', 'icon' => 'newspaper-o', 'url' => ['/news'],],
                            ['label' => 'Статьи', 'icon' => 'paper-plane', 'url' => ['/gii'],],
                            ['label' => 'Акции', 'icon' => 'hand-spock-o', 'url' => ['/sale'],],
                            ['label' => 'Архив акций', 'icon' => 'archive', 'url' => ['/debug'],],
//                            [
//                                'label' => 'Level One',
//                                'icon' => 'circle-o',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => 'Архив акции', 'icon' => 'circle-o', 'url' => '#',],
//                                    [
//                                        'label' => 'Level Two',
//                                        'icon' => 'circle-o',
//                                        'url' => '#',
//                                        'items' => [
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                        ],
//                                    ],
//                                ],
//                            ],
                        ],
                    ],
                    [
                        'label' => 'Фильтры',
                        'icon' => 'filter',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Создать новый фильтр', 'icon' => 'circle-o', 'url' => ['/type-credit'],],
                            ['label' => 'Подфильтры', 'icon' => 'circle-o', 'url' => ['/filters'],],
                            ['label' => 'Города', 'icon' => 'globe', 'url' => ['/city'],],
                        ],
                    ],

                ],
            ]
        ) ?>

    </section>

</aside>
