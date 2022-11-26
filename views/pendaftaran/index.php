<?php

use app\models\Pendaftaran;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PendaftaranSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pendaftarans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendaftaran-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pendaftaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tgl_pendaftaran',
            'pasien.nama_pasien',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pendaftaran $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pendaftaran' => $model->id_pendaftaran]);
                 }
            ],
        ],
    ]); ?>


</div>
