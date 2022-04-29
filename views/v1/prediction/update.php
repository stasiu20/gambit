<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Prediction */

$this->title = 'Update Prediction: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Predictions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prediction-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
