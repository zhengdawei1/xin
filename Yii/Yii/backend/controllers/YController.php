<?php
namespace backend\controllers;

use backend\models\Area;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
class YController extends Controller{
    public function actionIndex(){
        $model = new Area();
        if($model->load(Yii::$app->request->post())){
            if($model->validate()){
                if($model->save()){
                    echo 1;
                }
            }
        }
        return $this->render('index',['model'=>$model]);
    }
    public function actionList(){
        $data = Area::find()->All();
        return $this->render('list',['data'=>$data]);
    }
}