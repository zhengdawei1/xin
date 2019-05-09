<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<center>
<table border="1">
    <tr>
        <td>ID</td>
        <td>名称</td>
        <td>班级</td>
        <td>操作</td>
    </tr>
    <?php foreach($data as $key=>$value) {?>
    <tr>
        <th><?= $value['id']?></th>
        <th><?= $value['name']?></th>
        <th><?= $value['class_name']?></th>
        <th>
            <a href="index.php?r=index/class_del&id=<?= $value['id']?>">删除</a>
            <a href="index.php?r=index/class_find&id=<?= $value['id']?>">修改</a>
        </th>
    </tr>
    <?php }?>
</table>
</center>