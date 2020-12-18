<HTML>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/bootstrap/css/style.css?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '../static/bootstrap/css/style.css') ?>">
    <header>
        <?php
        include 'templates/header.html';
        ?>
    </header>
    <title>Удаление товара</title>
    <script src="../static/bootstrap/js/main.js?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '../static/bootstrap/js/main.js') ?>"></script>
</head>
<body>
<div class="re_form">
    <h1>
        Удаление товара
    </h1>
    <form action="request/product_request_del.php" method="post" name="delete_form">
        <?php
            $db=mysqli_connect("localhost", "evgenii", "1234");
            if (!$db) {
                die("Connection failed: " . mysqli_connect_error());
            }
            mysqli_select_db($db,"store");
            mysqli_set_charset($db,"utf8");
            $rez = mysqli_query($db,"SELECT * FROM product_info");
            While($mas = mysqli_fetch_array($rez))
            {
                printf("<p><input name='id' type='radio' value=%s>Product:%s %s<br>Code:%s  </p>",$mas['id'],
                    $mas['name'],$mas['model'],$mas['product_code']);
            }
        ?>
        <input type="submit" value="Удалить">
    </form>
</div>
    <footer>
        <?php
            include "templates/footer.html"
        ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="../static/bootstrap/js/main.js?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '../static/bootstrap/js/main.js') ?>"></script>
</body>
</HTML>
