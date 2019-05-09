<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "title".
 *
 * @property int $id
 * @property string $area
 */
class Title extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'title';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['area'], 'required'],
            [['area'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'area' => 'Area',
        ];
    }
}
