<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "area".
 *
 * @property int $area_id
 * @property string $area_name
 * @property string $area
 */
class Area extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['area_name', 'area'], 'required'],
            [['area_name', 'area'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'area_id' => 'Area ID',
            'area_name' => 'Area Name',
            'area' => 'Area',
        ];
    }
}
