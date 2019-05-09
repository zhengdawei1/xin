<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<?php $form=ActiveForm::begin()?>
<?= $form->field($model,'name')?>
<?= $form->field($model,'class_name')?>
<?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end()?>
