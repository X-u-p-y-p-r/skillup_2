<?php

// - while

$a = 0;
while ($a <= 99) {
    $a++;
    //var_dump($a);
}

$b = 10;
while ($b <= 32) {
    $b++;
    //var_dump($b);
}

$c = 0;
while ($c <= 99) {
    $c += 2;
    //var_dump($c);
}

$sum = 0;
$d = 1;
while ($d <= 100) {
    $sum = $sum+$d;
    $d++;
}
//var_dump($sum);

// - for

for ($a = 1; $a <= 100; $a++) {
    //var_dump($a);
}

for ($b = 11; $b <= 33; $b++) {
    //var_dump($b);
}

for ($c = 0; $c <= 100; $c += 2) {
    //var_dump($c);
}

$sum = 0;
for ($d = 1; $d <= 100; $d++) {
     $sum = $sum + $d;
}
//var_dump($sum);

$arr = array(2,5,9,15,0,4);
foreach ($arr as $value) {
    if ($value > 3 && $value < 10) {
        //echo $value . ' ';
    }
}

$arr1 = array(-1,2,5,-7,9,-17,-30,14,29);
$sum = 0;
foreach ($arr1 as $value1) {
    if ($value1 > 0) {
        $sum += $value1;
    }
}
//var_dump($sum);

$arr2 = array(1,2,5,9,4,13,4,10);
foreach ($arr2 as $value2) {
    if ($value2 == 4) {
        //echo "Есть!";
        break;
    }
}

$arr3 = array('10','20','30','50','235','3000');
foreach ($arr3 as $value3) {
    if ($value3 [0]==1) {
        //echo $value3 . " ";
    }
    if ($value3 [0]==2) {
        //echo $value3 . " ";
    }
    if ($value3 [0]==5) {
        //echo $value3 . " ";
    }
}

$arr4 = array(1,2,3,4,5,6,7,8,9);
$res = '-';
foreach ($arr4 as $value4) {
    $res = $res . $value4 . '-';
}
//echo "'$res'";

$arr5 = [];
for ($i = 1; $i <= 100; $i++){
    $arr5 [] = $i;
}
//var_dump($arr5);

$date = '22.03.2001';
//var_dump(preg_match("/^\d{2}.\d{2}.\d{4}$/u", $date, $m));
//var_dump($m);

$mob = '+380965557744';
var_dump(preg_match("/^[+]\d{12}$/u", $mob, $m));
var_dump($m);

