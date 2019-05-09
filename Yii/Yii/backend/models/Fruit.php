<?php
namespace backend\models;
use Yii;

class Fruit extends \yii\base\Model {
   public function add($name,$num){
       $res = Yii::$app->db->createCommand()->insert('fruit',[
       'name'=>$name,
       'num'=>$num,
       ])->execute();
       return $res;
   }

    public function getAll(){
        $res=Yii::$app->db->createCommand('select * from fruit')->queryAll();
        return $res;
    }
    public static function delete($id){
        $res = Yii::$app->db->createCommand()->delete('fruit','id='.$id)->execute();
        return $res;
    }
    public static function update($id,$name,$num){
        $res = Yii::$app->db->createCommand()->update('fruit',[
            'name'=>$name,
            'num'=>$num,
        ],'id='.$id)->execute();
        return $res;
    }
    public function getOne($id){
        $res = Yii::$app->db->createCommand("select * from fruit where id=$id")->queryOne();
        return $res;
    }
}