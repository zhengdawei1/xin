<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "class_name".
 *
 * @property int $id
 * @property string $name
 * @property string $class_name
 */
class ClassName extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'class_name';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'class_name'], 'required'],
            [['name', 'class_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'class_name' => 'Class Name',
        ];
    }
}
