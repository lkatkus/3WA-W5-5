<?php

    $arrGet = [];

    $read = fopen('dic.csv','r');

    $i = 0;

    while(($a = fgetcsv($read)) !== false){
        $arrGet[$i] = [
            'lt' => $a[0],
            'en' => $a[1],
            'ru' => $a[2],
            'pl' => $a[3]
        ];
        $i += 1;
    }

    fclose($read); /*MUST BE CLOSED AFTER OPENING */


    var_dump($arrGet);
    die(); /* REQUIRED FOR VAR_MASTERPIECE CHROME EXTENTION TO WORK */

?>
