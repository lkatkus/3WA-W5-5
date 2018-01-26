<?php

    echo "WRITING WORD... <br>";

    // CREATE DICTIONARY CSV
    $word = [
                [
                    'lt' => 'labas',
                    'en' => 'hello',
                    'ru' => 'privet',
                    'pl' => 'nu'
                ],

                [
                    'lt' => 'namas',
                    'en' => 'house',
                    'ru' => 'dom',
                    'pl' => 'dzom'
                ],

                [
                    'lt' => 'krabas',
                    'en' => 'crab',
                    'ru' => 'krab',
                    'pl' => 'zrab'
                ]
    ];

    $write = fopen('dic.csv','w');

    foreach ($word as $i) {
        fputcsv($write,[
            $i['lt'],
            $i['en'],
            $i['ru'],
            $i['pl']
        ]);
    }

    fclose($write);

?>
