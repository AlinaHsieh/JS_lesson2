<?php


$data['text'] = ['s1','s2','s3'];
$data['id']=[1,2,3];

$newArr = [
    [
        'id'=>1,
        'text'=>'s1'
    ],
    [   'id'=>2,
        'text'=>'s2'
],

];

$changeArr = [];
foreach($data['text'] as $key=>$value){
    $tmp = [
        'id'=>$data['id'][$key],
        'text'=>$data['text'][$key],
    ];
    array_push($changeArr,$tmp);

}
dd($changeArr);