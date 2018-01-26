<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>

        <div class="container py-3">
            <div class="row">
                <div class="col-6">
                    <h2>MEGA DICTIONARY</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <a href="index-read.php"><button class="btn btn-secondary" type="button" name="button">Home</button></a>
                    <a class="btn btn-secondary" href="index-new.php">Add new word</a>
                </div>
            </div>

            <div class="row py-3">
                <div class="col-7">
                    <table class="table text-center">
                        <tr>
                            <th>Num.</th>
                            <th>LT</th>
                            <th>EN</th>
                            <th>RU</th>
                            <th>PL</th>
                            <th></th>
                            <th></th>
                        </tr>
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

                            $j = 0;
                            $num = 1;
                            foreach($arrGet as $i){
                                echo '<tr>';
                                echo '<td class="align-middle">'.$num.'</td>';
                                foreach($i as $j){
                                    $z = array_search($j,$i);
                                    echo '<td class="align-middle">'.$i[$z].'</td>';
                                }
                                echo '<td><button class="btn btn-default" type="button" name="button">Update</button></td>';
                                echo '<td><button class="btn btn-default" type="button" name="button">Delete</button></td>';
                                echo '</tr>';

                                $num++;
                            }

                            // var_dump($arrGet);
                            // die(); /* REQUIRED FOR VAR_MASTERPIECE CHROME EXTENTION TO WORK */
                        ?>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>
