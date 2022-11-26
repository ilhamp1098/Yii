<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/** @var yii\web\View $this */
/** @var app\models\Pendaftaran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pendaftaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_pendaftaran')->widget(
        \yii\widgets\MaskedInput::class, [
            'mask' => "y-1-1",
            'clientOptions' => [
                'alias' => 'datetime',
                "placeholder" => "yyyy-mm-dd",
                "separator" => "-"
            ]
        ]
    ); ?>

<?php 
    $dataPost=ArrayHelper::map(\app\models\Pasien::find()
        ->asArray()->all(), 'id_pasien', 'nama_pasien');
    echo $form->field($model, 'id_pasien')
        ->dropDownList(
            $dataPost,           
            ['id_pasien'=>'nama_pasien']
        );

 ?>  

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
