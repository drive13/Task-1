<?php

function containLetters($key, $string)
{
    $arr = [];
    for ($i = 0; $i < strlen($key); $i++) {
        $arr[$i] = substr($key, $i, 1);
    }

    $arr2 = [];
    for ($i = 0; $i < strlen($string); $i++) {
        $arr2[$i] = substr($string, $i, 1);
    }

    //compare
    $cek = null;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j <= count($arr2); $j++) {
            if (strcasecmp($arr[$i], $arr2[$j]) == 0) {
                $cek += 1;
                break;
            }
        }
    }

    if ($cek === count($arr)) {
        return true;
    }
    return false;
}

var_dump(
    containLetters('brs', 'berkatsoft'),
    containLetters('brs', 'berkatco'),
    containLetters('brs', 'BERKATsoft'),
);
