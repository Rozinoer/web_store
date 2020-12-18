<HTML lang="eu">
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
    <title>Редактирование</title>
    <script src="../static/bootstrap/js/main.js?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '../static/bootstrap/js/main.js') ?>"></script>
</head>
<body>
<div class="re_form">
    <h1>Редактирование товаров</h1>
    <form action="./re_form.php" method="post" name="upd_form">
        <?php
        $code = $_REQUEST['product_code'];
        $db=mysqli_connect("localhost", "evgenii", "1234");
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }
        mysqli_select_db($db,"store");
        mysqli_set_charset($db,"utf8");
        $rez = mysqli_query($db,"SELECT * FROM product_info WHERE product_code = '$code'");
        $mas = mysqli_fetch_array($rez);
        ?>
        <p>
            Код товара<br>
            <label>
                <input type="text" name="product_code" class="data" value="">
            </label>
            <span class="error"></span>
        </p>
        <input type="submit" value="Подтвердить"">
    </form>
    <form action="request/product_request_upd.php" method="post" onclick="return check_field()">
        <p>
            Название<br>
            <label>
                <input type="text" name="nm" class="data" value="<?php echo $mas['name']?>">
            </label>
            <span class="error"></span>
        </p>
        <p>
            Поколение<br>
            <label>
                <input type="text" name="pm" class="data" value=" <?php echo $mas['evol']?>">
            </label>
            <span class="error"></span>
        </p>
        <p>
            Модель<br>
            <label>
                <input type="text" name="model" class="data" value=" <?php echo $mas['model']?>">
            </label>
            <span class="error"></span>
        </p>
        <p>
            Код товара<br>
            <label>
                <input type="text" name="product_code" class="data" value="<?php echo $mas['product_code']?>">
            </label>
            <span class="error"></span>
        </p>
        <p>
            Цена<br>
            <label>
                <input type="text" name="cost" class="data" value="<?php echo $mas['cost']?>">
            </label>
            <span class="error"></span>
        </p>
        <p>
            Цвет<br>
            <label>
                <input type="text" name="color" class="data" value="<?php echo $mas['color']?>">
            </label>
            <span class="error"></span>
        </p>
        <p>
            Процессор<br>
            <label>
                <input type="text" name="processor" class="data" value="<?php echo $mas['processor']?>">
            </label>
            <span class="error"></span>
        </p>
        <p>
            Экран<br>
            <label>
                <input type="text" name="screen" class="data" value="<?php echo $mas['screen']?>">
            </label>
            <span class="error"></span>
        </p>
        <p>
            Память<br>
            <label>
                <input type="text" name="memory" class="data" value="<?php echo $mas['memory']?>">
            </label>
            <span class="error"></span>
        </p>
        <p>
            Кол-во<br>
            <label>
                <input type="text" name="amount" class="data" value="<?php echo $mas['amount']?>">
            </label>
            <span class="error"></span>
        </p>
        <p>
            Операционная система<br>
            <label>
                <input type="text" name="os" class="data" value="<?php echo $mas['os']?>">
            </label>
            <span class="error"></span>
        </p>

        <input type="submit" value="Сохранить изменения">
        <input type="reset" value="Очистить форму">
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
    <script src="../static/bootstrap/js/main.js?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . 'main.js') ?>"></script>
</body>
</HTML>
