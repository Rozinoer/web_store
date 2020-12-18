<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/bootstrap/css/style.css?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '../static/bootstrap/css/style.css') ?>">
    <title>Главная</title>
</head>
<body>
<header>
    <?php
        include "../static/templates/header.html"
    ?>
</header>
</div>
<div class="grid-posts">
    <div class="container posts" style="background-color: #0b2e13">
        <div class="row"></div>
        <div class="col text-center after-posts">
        </div>
    </div>
</div>
<footer>
    <?php
        include "../static/templates/footer.html"
    ?>
</footer>
<script>

</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"   integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="   crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="../static/bootstrap/js/show.js?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '../static/bootstrap/js/main.js') ?>"></script>
<script src="../static/bootstrap/js/main.js?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '../static/bootstrap/js/main.js') ?>"></script>
</body>
</html>