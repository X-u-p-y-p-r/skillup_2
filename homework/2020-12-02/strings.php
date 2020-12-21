<?php

$text = 'Привет, Мир!';

echo $text;  // - задание 1

$text1 = "\nПривет,";
$text2 = 'Мир!';

echo $text1 . ' ' . $text2; // - задание 2

$name = 'Andrew';

echo "\nПривет, " . $name . '!'; // - задание 3

$age = 40;

echo "\nМне " . $age . ' лет!'; // - задание 4

$text = 'abcde';

echo "\n'{$text[0]}', '{$text[2]}', '{$text[4]}'"; // - задание 5