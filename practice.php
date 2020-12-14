<?php
/*
function niceDate($date) {

    $time = strtotime($date);
    $day = date('j', $time);
    $month = date('n', $time);
    $year = date('Y', $time);

    $arMonth = [
        1 => 'января',
        2 => 'февраля',
        3 => 'марта',
        4 => 'апреля',
        5 => 'мая',
        6 => 'июня',
        7 => 'июля',
        8 => 'августа',
        9 => 'сентября',
        10 => 'октября',
        11 => 'ноября',
        12 => 'декабря',
    ];

    return $day . ' ' . $arMonth[$month] . ' ' . $year;

}

echo niceDate('01.01.2021');
*/

/*
function explodeName($name) {

    $name = trim($name);

    $arName = [
        'first_name' => '',
        'last_name' => '',
    ];

    $arNameTMP = explode(' ', $name, 2);

    if(isset($arNameTMP[0]) && $arNameTMP[0] != '') {
        $arName['first_name'] = trim($arNameTMP[0]);
    }
    if(isset($arNameTMP[1]) && $arNameTMP[1] != '') {
        $arName['last_name'] = trim($arNameTMP[1]);
    }

    return $arName;

}

echo '<pre>';
//var_dump(explodeName('Бред     Питт'));
//var_dump(explodeName('Бред Питт'));
//var_dump(explodeName('БредПитт'));
var_dump(explodeName('   Бред   Питт'));
echo '</pre>';
*/

/*
function translit($str) {

    $arLetters = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'e',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'j',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'щ' => 'shch',
        ' ' => '-',
        '_' => '-',
    ];

    $str = preg_replace("/\W/u", " ", $str);

    $str = mb_strtolower($str, 'utf-8');
 //   $str = strtolower($str);
//    var_dump($str);
//    exit;

    $str = str_replace(array_keys($arLetters), $arLetters, $str);

    $str = trim($str, ' -');

    $str = preg_replace("/-+/u", "-", $str);

    return $str;

}

echo translit('   Зидан _ одержал _______________ - _________150%123 победу №3 в качестве       тренера Реала   ');

*/

/*
function clearName($str) {

    $str = preg_replace("/\<script\>.*\<\/script\>/", "", $str);

    $str = strip_tags($str);

    $str = preg_replace("/[^-\w]/u", " ", $str);
    $str = preg_replace("/_+/u", " ", $str);

    $str = trim($str);

    $str = preg_replace("/ +/u", " ", $str);

    return $str;

}

echo clearName('');
*/

function makeArr($str) {

//    preg_match_all("/[а-я][a-z][0-9]/ui", $str, $m);
    preg_match_all("/[а-яА-Я]+|[a-zA-Z]+|[0-9]+/u", $str, $m);

    if(isset($m[0])) {
        return
    }

//    return isset($m[0]) ? $m[0] :[];
    return isset($m[0]) ?? [];
}

var_dump(makeArr('ШезлонгKINGCAMP KC3902'));