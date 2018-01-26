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

            <div class="row">
                <div class="col-12 px-0">
                    <a class="btn btn-secondary" href="index-show.php">Show dictionary</a>
                    <a class="btn btn-secondary" href="index-new.php">Add new word</a>
                </div>
            </div>

            <div class="row py-3">
                <div class="col-6 px-0">
                    <form action="index-read.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="searchKey" placeholder="Enter word">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <select class="form-control" name="langFrom">
                                    <option value="lt">From Lithuanian</option>
                                    <option value="en">From English</option>
                                    <option value="ru">From Russian</option>
                                    <option value="pl">From Polish</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <select class="form-control" name="langTo">
                                    <option value="lt">To Lithuanian</option>
                                    <option value="en">To English</option>
                                    <option value="ru">To Russian</option>
                                    <option value="pl">To Polish</option>
                                </select>
                            </div>
                        </div>

                        <div class="py-3">
                            <button class="btn btn-info" type="submit" name="button">Search</button>
                            <?php
                                // if(array_key_exists('searchKey',$_GET)){
                                //     $key=$_GET['searchKey'];
                                //     $langFrom=$_GET['langFrom'];
                                //     echo '<a class="btn btn-primary" href="index-new.php?searchKey='.$key.'&langFrom='.$langFrom.'">Add this word?</a>';
                                // }
                            ?>
                        </div>
                    </form>
                </div>

                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                <?php
                                    if($key==null){
                                        if(array_key_exists('searchKey',$_GET)){
                                            $key=$_GET['searchKey'];
                                            $langFrom=$_GET['langFrom'];
                                            $langTo=$_GET['langTo'];
                                            $result = search($key, $langFrom, $langTo);

                                            if($result){
                                                echo $result;
                                            }else{
                                                echo 'No such word found';
                                                echo '<a class="btn btn-warning" href="index-new.php?searchKey='.$key.'&langFrom='.$langFrom.'">Add this word?</a>';
                                            }
                                        }
                                    }
                                ?>
                            </h4>
                        </div>
                    </div>

                </div>
            </div>

        </div>



    </body>
</html>
