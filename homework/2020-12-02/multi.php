<?php

$arr = [
    'cms'=>['joomla','wordpress','drupal'],
    'colors'=>['blue'=>'голубой','red'=>'красный','green'=>'зеленый']
];

//var_dump($arr['cms'][0], $arr['cms'][2], $arr['colors']['green'], $arr['colors']['red']); // - задание 1

$arr1 = [
    'ru'=>['Пн','Вт','Ср','Чт','Пт','Сб','Вс'],
    'en'=>['Mn','Tu','We','Th','Fr','Sa','Su'],
];

//var_dump($arr1['ru'][0], $arr1['en'][2]); // - задание 2

$lang = 'ru';
$day = 2;

var_dump($arr1[$lang][$day]); // - задание 3

