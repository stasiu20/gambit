<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prediction".
 *
 * @property int $id
 * @property int $event_id
 * @property string $market_type
 * @property string $prediction
 * @property string $status
 * @property string $created_at
 * @property string|null $updated_at
 */
class Prediction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prediction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_id', 'market_type', 'prediction'], 'required'],
            [['event_id'], 'integer'],
            [['market_type', 'status'], 'string'],
            ['status', 'in', 'range' => ['win','lost','unresolved']],
            [['created_at', 'updated_at'], 'safe'],
            [['prediction'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_id' => 'Event ID',
            'market_type' => 'Market Type',
            'prediction' => 'Prediction',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
