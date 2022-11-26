<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/** @var yii\web\View $this */
/** @var app\models\Pegawai $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pegawai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notelp')->textInput(['maxlength' => true,'type' => 'number']) ?>

    <?= $form->field($model, 'tgl_lahir')->widget(
        \yii\widgets\MaskedInput::class, [
            'mask' => "y-1-1",
            'clientOptions' => [
                'alias' => 'datetime',
                "placeholder" => "yyyy-mm-dd",
                "separator" => "-"
            ]
        ]
    ); ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

<?php 
    $dataPost=ArrayHelper::map(\app\models\Wilayah::find()
        ->asArray()->all(), 'id_wilayah', 'nama_wilayah');
    echo $form->field($model, 'id_wilayah')
        ->dropDownList(
            $dataPost,           
            ['id_wilayah'=>'nama_wilayah']
        );

 ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
