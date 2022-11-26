<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pendaftaran $model */

$this->title = $model->id_pendaftaran;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pendaftaran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pendaftaran' => $model->id_pendaftaran], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pendaftaran' => $model->id_pendaftaran], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pendaftaran',
            'tgl_pendaftaran',
            'pasien.nama_pasien',
        ],
    ]) ?>

</div>
