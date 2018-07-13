<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "note".
 *
 * @property int $id
 * @property string $text
 * @property int $creator
 * @property string $date_create
 */
class Note extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'note';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'creator'], 'required'],
            [['text'], 'string'],
            [['creator'], 'integer'],
            [['date_create'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'text' => Yii::t('app', 'Text'),
            'creator' => Yii::t('app', 'Creator'),
            'date_create' => Yii::t('app', 'Date Create'),
        ];
    }
}
