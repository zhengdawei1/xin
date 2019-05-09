<?php
namespace backend\modules\v1\controllers;

use backend\modules\v1\models\Fruit;
use yii\rest\ActiveController;


class AnnimalController extends ActiveController {

    protected $result = array(
        'code' => 0,
        'data' => '',
        'error' => '',
    );

    public $modelClass = '';


    public function actionNum(){
        echo 'actionNum: ';

        $name = \Yii::$app->request->post('name');
        var_export($name);
        $age = \Yii::$app->request->post('age');
        var_export($age);
    }

}
