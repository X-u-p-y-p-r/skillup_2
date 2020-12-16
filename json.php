<?php
$arData = [
    ['name' => 'Mike', 'age' => 30, 'salary' => 1800],
    ['name' => 'Paul', 'age' => 22, 'salary' => 2000],
    ['name' => 'Anna', 'age' => 28, 'salary' => 2300],
];

header('Content-Type: application/json');
echo json_encode($arData);