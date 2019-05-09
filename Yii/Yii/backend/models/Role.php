<?php
namespace backend\models;
use yii\base\Model;
use Yii;
class Role extends \yii\db\ActiveRecord{
    public function Add(){
        $role = new Role();
        $role->role = '张三';
        $role->save();
        return $role;
    }
    public function select(){
       $role = Role::find()
           ->asArray()
            ->all();
        return $role;
    }
    public function del(){
        $role = Role::findOne(1);
         $role->delete();
        return true;
    }
    public function upfind(){
        $role = Role::updateAll(['role'=>'小赵'],['id'=>2]);
        return true;
    }
    public function union(){
        $role1 = (new \yii\db\Query())
            ->select("id,text3_id AS type, username")
            ->from('text3')
            ->limit(2);
        $role2 = (new \yii\db\Query())
            ->select('id,type, role')
            ->from('role')
            ->limit(2);
        $role1->union($role2);
        return $role1;
    }
    public function where(){
        $role = Role::find()->orwhere('id=2')->asArray()->all();
        return $role;
    }
    public function join(){
        $query = (new \yii\db\Query())->from('role');
        $query->leftJoin('text3', 'text3.text3_id = role.id')->all();
        return $query;
    }
    public function notin(){
        $role = Role::find();
        $data = $role->from('role')->where(['not in','id',3])->asArray()->all();
        return $data;
    }
    public function between(){
        $role = Role::find();
        $data = $role->from('role')->where(['between','id',2,5])->asArray()->all();
        return $data;
    }
}