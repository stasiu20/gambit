<?php

namespace app\controllers\v1;

use app\models\Prediction;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\rest\ActiveController;

/**
 * PredictionController implements the CRUD actions for Prediction model.
 */
class PredictionController extends ActiveController
{
    public $modelClass = 'app\models\Prediction';
}
