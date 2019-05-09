<?php
namespace backend\controllers;

use backend\models\Fruit;
use yii\rest\ActiveController;
use Yii;
class FruitController extends ActiveController {
    public $modelClass = 'backend\models\fruit';
    public function actions(){
        $actions = parent::actions();
        unset($actions['index'], $actions['update'], $actions['create'], $actions['delete'], $actions['view']);
        return $actions;
    }

    public function actionCreate(){
        $model = new Fruit();
        $name = Yii::$app->request->post('name');
        $num = Yii::$app->request->post('num');
        $res = $model->add($name,$num);
        if($res){
            return '添加成功';
        }else{
            return '添加失败';
        }
    }
    public function actionIndex(){
        $model = new Fruit();
        $res=$model->getAll();
        return $res;
    }
    public function actionDelete(){
        $id = Yii::$app->request->get('id');
        $model = new Fruit();
        $res = $model->delete($id);
        if($res){
            return '删除成功';
        }else{
            return '删除失败';
        }
    }
    public function actionUpdate(){
        $id = Yii::$app->request->get('id');
        $name = Yii::$app->request->post('name');
        $num = Yii::$app->request->post('num');
        $model = new Fruit();
        $res = $model->update($id,$name,$num);
        if($res){
            return '修改成功';
        }else{
            return '修改失败';
        }
    }
    public function actionView(){
        $id = Yii::$app->request->get('id');
        $model = new Fruit();
        $res = $model->getOne($id);
        return $res;
    }
}
