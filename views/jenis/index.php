<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JenisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jenis Buku';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-index box box-primary">

    <h1></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class ="glyphicon glyphicon-plus"></i> Tambah Jenis', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
            'header' => 'No',

            ],

            
            'nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
