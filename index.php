<?php

function containLetters($key, $string)
{
    //pecah keyword string kedalam array
    $arr = [];
    for ($i = 0; $i < strlen($key); $i++) {
        //simpan kedalam array
        $arr[$i] = substr($key, $i, 1);
    }

    //pecah string kedalam array
    $arr2 = [];
    for ($i = 0; $i < strlen($string); $i++) {
        //simpan kedalam array
        $arr2[$i] = substr($string, $i, 1);
    }

    //compare tiap value untuk mencari key string dalam string lainya
    $cek = null;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j <= count($arr2); $j++) {
            if (strcasecmp($arr[$i], $arr2[$j]) == 0) {
                //jika key string ditemukan pada string maka tambah nilai $cek
                $cek += 1;
                break;
            }
        }
    }

    //jika jumlah hasil komparisasi sesuai dengan jumlah key string maka return true
    if ($cek === count($arr)) {
        return true;
    }
    //jika jumlah hasil komparisasi tidak sama dengan jumlah key string return false
    return false;
}

var_dump(
    containLetters('brs', 'berkatsoft'),
    containLetters('brs', 'berkatco'),
    containLetters('brs', 'BERKATsoft'),
);
