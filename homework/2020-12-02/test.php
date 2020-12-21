<?php

$id = '423ehehtr';

$intId = (int)$id;

if ((string)$intId == $id) {
    echo $id . ' - это число';
} else {
    echo $id . ' - это строка';
}