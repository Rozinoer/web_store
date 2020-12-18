<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../static/bootstrap/css/style.css?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . 'style.css') ?>">
    <title>Админ</title>
</head>
<body>
<header>
    <?php
    include "../templates/header.html"
    ?>
</header>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="content">
                <?php
                $name=$_REQUEST['nm'];
                $evol=$_REQUEST['pl'];
                $color=$_REQUEST['color'];
                $cost=$_REQUEST['cost'];
                $model=$_REQUEST['model'];
                $code=$_REQUEST['product_code'];
                $processor=$_REQUEST['processor'];
                $screen=$_REQUEST['screen'];
                $amount=$_REQUEST['amount'];
                $memory=$_REQUEST['memory'];
                $os=$_REQUEST['os'];

                $db=mysqli_connect("localhost", "id15703878_evgenii", "huMvy3-javjyh-bengur");
                if (!$db) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                mysqli_select_db($db,"id15703878_store");
                mysqli_set_charset($db,"utf8");
                $check = mysqli_query($db,"SELECT * FROM product_info WHERE product_code ='$code'");
                if(!(mysqli_fetch_array($check))) {
                    $pr = mysqli_query($db, "INSERT INTO product_info(name, cost, color,product_code, processor, 
                        screen, memory, amount, os, model) VALUES ('$name','$cost','$color','$code','$processor','$screen','$memory','$amount','$os', '$model')");
                    if ($pr == true)
                        echo "Данные добавлены";
                    else
                        echo "Ошибка добавления данных";
                }
                else
                    echo ">Данные уже имеются</a>";
                ?>
                <br>
                <a href = "../add_form.php">Назад</a>
            </div>
        </div>
    </div>
</div>
<footer>
    <?php
    include "templates/footer.html"
    ?>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="../../static/bootstrap/js/main.js?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . 'main.js') ?>"></script>
</body>
</html>
