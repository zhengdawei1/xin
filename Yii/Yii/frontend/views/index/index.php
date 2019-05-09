<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php $form=ActiveForm::begin()?>
<?= $form->field($model, 'area') ?>
<?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end()?>