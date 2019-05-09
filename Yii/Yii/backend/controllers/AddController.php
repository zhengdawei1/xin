<?php
namespace backend\controllers;
use backend\models\Role;
use Yii;
use yii\web\Controller;
class AddController extends Controller{
    public function actionIndex(){
        $data = new Role();
       //$res = $data->add();
       // $res = $data->select();
       // $res = $data->del();
        //$res = $data->upfind();
        //$res = $data->union();
        //$res = $data->where();
        //$res = $data->join();
//        $res = $data->notin();
        $res = $data->between();
        var_dump($res);
    }
}