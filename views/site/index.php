<?php


use app\models\Buku;
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

?>
    <?php print Html::a('link',['site/index']);
print Url::to(['site/index']); 
  ?>

<div class="site-index">
    <div class="body-content">

    <div class="row">
    <div class="col-lg-4">
                <h2>Berita 1</h2>

        <div class="kotak">
                    <?= Buku::getCount(); ?>
                    <span style="font-size: 20px">Jumlah Buku</span>
                </div>
                <a class="btn btn-default" href="<?= Url::to(['buku/index']); ?>">Buku</a>

            </div>
            <div class="col-lg-4">
                <h2>Berita 2</h2>

                <div class="kotak">
                    6
                    <span style="font-size: 20px">Jumlah Penerbit</span>
                </div>

                <a class="btn btn-default" href="<?= Url::to(['penerbit/index']); ?>">Penerbit</a>
            </div>
            <div class="col-lg-4">
                <h2>Berita 3</h2>

                <div class="kotak">
                    4
                    <span style="font-size: 20px">Jumlah Penulis</span>
                </div>

                <a class="btn btn-default" href="<?= Url::to(['penulis/index']); ?>">Penulis</a>
            </div>
        </div>

    </div>
</div>
