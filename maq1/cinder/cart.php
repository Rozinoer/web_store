<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/bootstrap/css/style.css?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . 'style.css') ?>">
    <title>Главная</title>
</head>
<body>
<header>
    <?php
    include "../static/templates/header.html"
    ?>
</header>
<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="cart">
                   <div class="cart-header">
                       <div class="d-flex justify-content-around">
                          <h1>Код товара</h1>
                           <h1>Наименование</h1>
                           <h1>Кол-во</h1>
                           <h1>Стоимость</h1>
                       </div>
                   </div>
                    <div class="cart-body">
                    </div>
                    <div class="cart-footer">
                        <div class="d-flex justify-content-end" style="margin-right: 100px">
                            <h3>Итого:</h3>
                            <h3 class="cost"></h3>
                        </div>
                        <button type="button" class="btn btn-dark">Купить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <?php
    include "../static/templates/footer.html"
    ?>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"   integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="   crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="../static/bootstrap/js/cart.js?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . 'main.js') ?>"></script>
</body>
</html>