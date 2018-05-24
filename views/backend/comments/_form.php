<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\comment\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'priority')->dropDownList([ 'Acil' => 'Acil', 'Normal' => 'Normal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => $model['date']])->label(false) ?>

    <?= $form->field($model, 'email')->hiddenInput(['value' => $model['date']])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
