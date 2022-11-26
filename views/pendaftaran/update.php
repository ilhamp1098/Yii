<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pendaftaran $model */

$this->title = 'Update Pendaftaran: ' . $model->id_pendaftaran;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pendaftaran, 'url' => ['view', 'id_pendaftaran' => $model->id_pendaftaran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendaftaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
