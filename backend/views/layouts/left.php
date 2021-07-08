<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $avatar;?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= $fullName;?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- /.search form -->
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Навигация', 'options' => ['class' => 'header']],
                    ['label' => 'МФО', 'icon' => 'book', 'url' => ['mfo/index']],
                    ['label' => 'Создание страниц', 'icon' => 'file-code-o', 'url' => ['/pages']],
                    ['label' => 'Редактор главной страницы', 'icon' => 'file-code-o', 'url' => ['/main/update?id=1']],
                    ['label' => 'Меню', 'icon' => 'dashboard', 'url' => ['/menu']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Рубрики',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Новости', 'icon' => 'newspaper-o', 'url' => ['/news'],],
                            ['label' => 'Статьи', 'icon' => 'paper-plane', 'url' => ['/news'],],
                            ['label' => 'Акции', 'icon' => 'hand-spock-o', 'url' => ['/sale'],],
                            ['label' => 'Архив акций', 'icon' => 'archive', 'url' => ['/sale'],],
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
                        'label' => 'Отзывы',
                        'icon' => 'comments',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Все отзывы', 'icon' => 'circle-o', 'url' => ['/review/index'],],
                        ],
                    ],
                    [
                        'label' => 'Фильтры',
                        'icon' => 'filter',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Создать новый фильтр', 'icon' => 'circle-o', 'url' => ['/filters'],],
                            ['label' => 'Подфильтры', 'icon' => 'circle-o', 'url' => ['/type-credit'],],
                            ['label' => 'Города', 'icon' => 'globe', 'url' => ['/city'],],
                        ],
                    ],
                    [
                        "label" => "Управление пользователями",
                        "url" => "#",
                        "icon" => "users",
                        "items" => [
                            [
                                "label" => "Пользователи",
                                "url" => ["/users/index"],
                            ],
                            [
                                "label" => "Создать пользователя",
                                "url" => ["/users/create"],
                            ],
                        ],
                    ],

                ],
            ]
        ) ?>

    </section>

</aside>
