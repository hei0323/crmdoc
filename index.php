<?php

require_once './testModel.php';

$model = new testModel();

$data = [
    'name'=>'摄入歌人 订单',
    'email'=>'2327220168qq.com',
];

$result = $model->validate($data);

var_dump($result);
var_dump($model->error);die;
