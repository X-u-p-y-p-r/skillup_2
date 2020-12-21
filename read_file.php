<?php
$file = 'test.txt';
header('Content-Type: text/html; charset=utf-8');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');
//readfile($file);

$text = file_get_contents($file);
echo str_replace(PHP_EOL, '<br>', $text);
