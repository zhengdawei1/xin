<?php
namespace frontend\controllers;

use frontend\models\Title;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
class IndexController extends Controller{
    public function actionIndex(){
        $model = new Title();
        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate()){
                if($model->save()){
                    echo 1;
                }
            }
        }
        return $this->render('index',['model'=>$model]);
    }
}