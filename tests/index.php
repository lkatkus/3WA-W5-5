<?php

    // $arr = [
    //     'name' => 'STALIUS',
    //     'age' => '25'
    // ];
    //
    // $arrGet = [];
    //
    // $write = fopen('test.csv','a');
    //
    // fputcsv($write,[
    //     $arr['name'],
    //     $arr['age']
    // ]);
    //
    // fclose($write);
    //
    // $read = fopen('test.csv','r');
    //
    // $i = 0;
    //
    // while(($a = fgetcsv($read)) !== false){
    //     $arrGet[$i] = [
    //         'name' => $a[0],
    //         'age' => $a[1]
    //     ];
    //     $i += 1;
    // }
    //
    // fclose($read); /*MUST BE CLOSED AFTER OPENING */
    //
    // echo $arrGet[0]['name'];
    // echo '<br>';
    //
    // var_dump($arrGet);
    // die(); /* REQUIRED FOR VAR_MASTERPIECE CHROME EXTENTION TO WORK */



    // CREATE DICTIONARY CSV
    $word = [
        'lt' => 'labas',
        'en' => 'hello',
        'ru' => 'privet',
        'pl' => 'dzendobre'
    ];

    $write = fopen('dic.csv','w');

    fputcsv($write,[
        $word['lt'],
        $word['en'],
        $word['ru'],
        $word['pl']
    ]);

    fclose($write);

    // READ DICTIONARY

?>
