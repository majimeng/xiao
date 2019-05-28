<?php

//封装
//错误信息

//正确信息
function success($font){
    $arr =[
        'font' => $font,
        'code' => 1
    ];
    echo json_encode($arr);
}
//错误信息
function full($font){
    $arr =[
        'font' => $font,
        'code' => 2
    ];
    echo json_encode($arr);die;
}

//感叹号信息
function hint($font){
    $arr =[
        'font' => $font,
        'code' => 0
    ];
    echo json_encode($arr);
}

//疑问信息
function doubt($font){
    $arr =[
        'font' => $font,
        'code' => 3
    ];
    echo json_encode($arr);
}

//疑问信息
function lock($font){
    $arr =[
        'font' => $font,
        'code' => 4
    ];
    echo json_encode($arr);
}

//错误表情信息
function full1($font){
    $arr =[
        'font' => $font,
        'code' => 5
    ];
    echo json_encode($arr);die;
}
//正确表情信息
function success1($font){
    $arr =[
        'font' => $font,
        'code' => 6
    ];
    echo json_encode($arr);
}