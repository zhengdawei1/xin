<?php
namespace backend\controllers;

use backend\models\ClassName;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
class IndexController extends Controller{
//    public function beforeAction($action){
////       var_export('beforeAction');
//        return true;
//    }
//    public function afterAction($action,$result){
//        var_export('beforeAction');
//        return true;
//    }
//    public function actionIndex(){
//        var_export('actionIndex');
//    }
    public function actionClass_name(){
        $model = new ClassName();
        if($model->load(Yii::$app->request->post())){
            if($model->validate()){
                if($model->save()){
                    echo 1;
                }
            }
        }
        return $this->render('class_name',['model'=>$model]);
    }
    public function actionClass_list(){
        $data = ClassName::find()->All();
        return $this->render('class_list',['data'=>$data]);
    }
    public function actionClass_del($id){
        $model = ClassName::findOne($id);
        $model->delete();
        return $this->redirect(['index/class_list']);
    }
    public function actionClass_find($id){
        $model = ClassName::findOne($id);
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index/class_list']);
        }
        return $this->render('class_find',['model'=>$model]);
    }
}