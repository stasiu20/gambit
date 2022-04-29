<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Prediction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prediction-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_id')->textInput() ?>

    <?= $form->field($model, 'market_type')->dropDownList([ '1x2' => '1x2', 'correct_score' => 'Correct score', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'prediction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'win' => 'Win', 'lost' => 'Lost', 'unresolved' => 'Unresolved', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
