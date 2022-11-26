<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/** @var yii\web\View $this */
/** @var app\models\Tindakan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tindakan-form">

    <?php $form = ActiveForm::begin(); ?>

<?php 
    $dataPost=ArrayHelper::map(\app\models\Pasien::find()
        ->asArray()->all(), 'id_pasien', 'nama_pasien');
    echo $form->field($model, 'id_pasien')
        ->dropDownList(
            $dataPost,           
            ['id_pasien'=>'nama_pasien']
        );

 ?>     

    <?= $form->field($model, 'nama_tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarif_tindakan')->textInput(['maxlength' => true,'type' => 'number']) ?>

<?php 
    $dataPost=ArrayHelper::map(\app\models\Obat::find()
        ->asArray()->all(), 'id_obat', 'nama_obat');
    echo $form->field($model, 'id_obat')
        ->dropDownList(
            $dataPost,           
            ['id_obat'=>'nama_obat']
        );

 ?>  

    <?= $form->field($model, 'jumlah')->textInput(['maxlength' => true,'type' => 'number']) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
