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
        <title>Добавление товара</title>
        <script src="../static/bootstrap/js/main.js?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '../static/bootstrap/js/main.js') ?>"></script>
    </head>
    <body>
    <div class="re_form">
        <h1>Добавить товар</h1>
        <form action="request/product_request.php" method="post" name="add_form" onclick="return check_field()," ">
            <p>
                Название<br>
                <label>
                    <input type="text" name="nm" class="data"">
                </label>
                <span class="error"></span>
            </p>
            <p>
                Поколение<br>
                <label>
                    <input type="text" name="pl" class="data"">
                </label>
                <span class="error"></span>
            </p>
            <p>
                Модель<br>
                <label>
                    <input type="text" name="model" class="data"">
                </label>
                <span class="error"></span>
            </p>
            <p>
                Цена<br>
                <label>
                    <input type="text" name="cost" class="data"">
                </label>
                <span class="error"></span>
            </p>
            <p>
                Цвет<br>
                <label>
                    <input type="text" name="color" class="data">
                </label>
                <span class="error"></span>
            </p>
            <p>
                Код товара<br>
                <label>
                    <input type="text" name="product_code" class="data">
                </label>
                <span class="error"></span>
            </p>
            <p>
                Процессор<br>
                <label>
                    <input type="text" name="processor" class="data">
                </label>
                <span class="error"></span>
            </p>
            <p>
                Экран<br>
                <label>
                    <input type="text" name="screen" class="data">
                </label>
                <span class="error"></span>
            </p>
            <p>
                Память<br>
                <label>
                    <input type="text" name="memory" class="data">
                </label>
                <span class="error"></span>
            </p>
            <p>
                Кол-во<br>
                <label>
                    <input type="text" name="amount" class="data">
                </label>
                <span class="error"></span>
            </p>
            <p>
                Операционная система<br>
                <label>
                    <input type="text" name="os" class="data">
                </label>
                <span class="error"></span>
            </p>

            <input type="submit" value="Добавить товар"">
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
        <script src="static/admin.js?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '../static/bootstrap/js/main.js') ?>"></script>
        <script src="../static/bootstrap/js/main.js?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '../static/bootstrap/js/main.js') ?>"></script>
    </body>
</HTML>