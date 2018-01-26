<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP DICTIONARY</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <?php include('search.php') ?>

        <div class="container py-3">
            <div class="row">
                <div class="col-6 px-0">
                    <h2>MEGA DICTIONARY</h2>
                </div>
            </div>

            <div class="row py-3">
                <div class="col-6 px-0">
                    <form action="index-new.php" method="get">

                        <div class="form-group">
                            <input type="text" class="form-control" value="<?php if($_GET['langFrom'] == 'lt'){echo $_GET['searchKey'];}?>"name="newLt" placeholder="Enter word in lithuanian">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="<?php if($_GET['langFrom'] == 'en'){echo $_GET['searchKey'];}?>"name="newEn" placeholder="Enter word in english">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="<?php if($_GET['langFrom'] == 'ru'){echo $_GET['searchKey'];}?>"name="newRu" placeholder="Enter word in russian">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="<?php if($_GET['langFrom'] == 'pl'){echo $_GET['searchKey'];}?>"name="newPl" placeholder="Enter word in polish">
                        </div>

                        <button class="btn btn-primary" type="submit" name="button">Submit</button>
                        <a href="index-read.php"><button class="btn btn-primary" type="button" name="button">Home</button></a>

                    </form>
                </div>

                <div class="col-6">

                        <?php
                            $newWord = null;
                            if($newWord==null){
                                if(array_key_exists('newLt',$_GET)){
                                    $newLt=$_GET['newLt'];
                                    $newEn=$_GET['newEn'];
                                    $newRu=$_GET['newRu'];
                                    $newPl=$_GET['newPl'];

                                    // CREATE NEW WORD ARRAY
                                    $newArr = [
                                        'lt' => $newLt,
                                        'en' => $newEn,
                                        'ru' => $newRu,
                                        'pl' => $newPl
                                    ];

                                    var_dump($newArr);

                                    echo '<br>===============<br>';

                                    if($newArr){
                                        addWord($newArr);
                                    }
                                    else{
                                        echo 'Please, enter a word';
                                    }
                                }
                            }
                        ?>

                </div>
            </div>

        </div>



    </body>
</html>
