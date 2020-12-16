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

//function makeArr($str) {
//
////    preg_match_all("/[а-я][a-z][0-9]/ui", $str, $m);
//    preg_match_all("/[а-яА-Я]+|[a-zA-Z]+|[0-9]+/u", $str, $m);
//
//    if(isset($m[0])) {
//        return
//    }
//
////    return isset($m[0]) ? $m[0] :[];
//    return isset($m[0]) ?? [];
//}
//
//var_dump(makeArr('ШезлонгKINGCAMP KC3902'));

/*
// телефоны
function niceNumber($number, $str1, $str24, $str59) {

    $dcat_number = $number%100;
    if($dcat_number >= 11 && $dcat_number <= 19) {
        $strFinal = $str59;
    } else  {
        $last_number = $number%10;

        switch ($last_number) {
            case 1 : $strFinal = $str1; break;
            case 2 :
            case 3 :
            case 4 : $strFinal = $str24; break;
            default : $strFinal = $str59; break;
        }

    }

    return $number . ' ' . $strFinal;

}

echo niceNumber(1112, 'телефон', 'телефона', 'телефонов');
*/

/*
session_start();

function authenticate() {
    header('WWW-Authenticate: Basic realm="Test Authentication System"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Вы должны ввести корректный логин и пароль для получения доступа к ресурсу \n";
    exit;
}
if (!isset($_SERVER['PHP_AUTH_USER']) ||
    ($_POST['SeenBefore'] == 1 && $_POST['OldAuth'] == $_SERVER['PHP_AUTH_USER'])) {
    authenticate();
} else {
    echo "<p>Добро пожаловать: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "<br />";
    echo "Предыдущий логин: " . htmlspecialchars($_REQUEST['OldAuth']);
    echo "<form action='' method='post'>\n";
    echo "<input type='hidden' name='SeenBefore' value='1' />\n";
    echo "<input type='hidden' name='OldAuth' value=\"" . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "\" />\n";
    echo "<input type='submit' value='Авторизоваться повторно' />\n";
    echo "</form></p>\n";
}
*/

echo '<a href="/save_file.php">Скачать файл</a><br />';
echo '<a href="/read_file.php">Прочитать файл</a><br />';
echo '<a href="/test.txt">Ссылка на файл</a><br />';