<?php
    use app\models\PelayananStatus;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Yii::getAlias('@web').'/images/POLINDRA.png'; ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['site/index'],],

                    [ 
                        'label' => 'Data Pengguna',
                        'icon' => 'user',
                        'url' => '#',
                        'items' => [
                        ['label' => 'Admin', 'icon' => 'circle-o', 'url' => ['admin/index'],],
                        ['label' => 'User', 'icon' => 'circle-o', 'url' => ['pengguna/index'],],
                        ],
                    ],
                    
                    [ 
                        'label' => 'Kategori Buku',
                        'icon' => 'th',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Buku', 'icon' => 'circle-o', 'url' => ['buku/index'],],
                            ['label' => 'Jenis Buku', 'icon' => 'circle-o', 'url' => ['jenis/index'],],
                            ['label' => 'Penerbit', 'icon' => 'circle-o', 'url' => ['penerbit/index'],],
                            ['label' => 'Penulis', 'icon' => 'circle-o', 'url' => ['penulis/index'],],
                            /*['label' => 'Jenis Kelamin', 'icon' => 'intersex', 'url' => ['jenis-kelamin/index'],]*/
                
                    ],

                ],
                              
                ],
            ]
        ) ?>

    </section>

</aside>
