<?php

function readDic(){
    // PLACEHOLDER EMPTY ARRAY
    $arrGet = [];

    // OPENING DICTIONARY FILE
    $read = fopen('dic.csv','r');

    // LOOP FOR PUSHING DICTIONARY TO PLACEHOLDER ARRAY
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

    /*MUST BE CLOSED AFTER OPENING */
    fclose($read);

    // RETURNS ARRAY
    return $arrGet;
}

function search($key, $langFrom, $langTo){
    $dic = readDic();

    foreach ($dic as $i){
        foreach ($i as $j){
            if($key == $j){
                // echo 'WORD FOUND<br>';
                $mainWordArray = $i; /* MAIN ARRAY FOR SEARCHED WORD; */
                // echo 'TEST - '.$mainWordArray[$langTo].'<br>';
                $langEnter = array_search($key,$i); /* LANGUAGE OF ENTERED WORD */
                // echo $langEnter.'<br>';
                break;
            }
        };
    };

    if($mainWordArray){
        // echo $key.' ';
        // echo $langFrom.' ';
        // echo $langTo.'<br>';

        return $mainWordArray[$langTo];
    }else{
        return (false);
    }
}

function redirect($url)
{
    header('Location: '.$url);
    exit();
}


function addWord($newArr){
    echo 'FUNCTION addWord<br>';
    echo $newArr['lt'].'<br>';
    echo $newArr['en'].'<br>';
    echo $newArr['ru'].'<br>';
    echo $newArr['pl'].'<br>';

    echo 'WRITTING<br>';
    $write = fopen('dic.csv','a');

    fputcsv($write,[
        $newArr['lt'],
        $newArr['en'],
        $newArr['ru'],
        $newArr['pl']
    ]);

    fclose($write);

}

?>
