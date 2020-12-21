<?php
//$list = array(
//    array("Mike", "30", "1800"),
//    array("Paul", "22", "2000"),
//    array("Anna", "28", "2300")
//);

$arData = [
    ['name' => 'Mike', 'age' => 30, 'salary' => 1800],
    ['name' => 'Paul', 'age' => 22, 'salary' => 2000],
    ['name' => 'Anna', 'age' => 28, 'salary' => 2300],
];

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename=file.csv');
$out = fopen('php://output', 'w');

fputcsv($out, array_keys($arData[0]));

foreach ($arData as $line) {
    fputcsv($out, $line);
}

fclose($out);

