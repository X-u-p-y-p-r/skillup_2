<?php
$file = 'test.txt';
header('Content-Type: text/html; charset=utf-8');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');
header('Content-Disposition: attachment; filename="my_downloaded_file_' . date("Y_m_d_H_i_s") . '.txt"');
readfile($file);