<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<center>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>留言者</td>
            <td>留言内容</td>
            <td>操作</td>
        </tr>
        <?php foreach($data as $key=>$value) {?>
        <tr>
            <td><?= $value['area_id']?></td>
            <td><?= $value['area_name']?></td>
            <td><?= $value['area']?></td>
            <td><a href="">回复</a></td>
        </tr>
        <?php }?>
    </table>
</center>