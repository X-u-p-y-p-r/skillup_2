<?php
$list = array(
    array("Mike", "30", "1800"),
    array("Paul", "22", "2000"),
    array("Anna", "28", "2300")
);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename=file.csv');
$out = fopen('php://output', 'w');

foreach ($list as $line) {
    fputcsv($out, $line);
}

fclose($out);

