<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./static/bootstrap/css/style.css?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . 'style.css') ?>">
    <title>Главная</title>
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-xl">
            <a class="navbar-brand" href="#">
                CINDER
            </a>
        </nav>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="content">
                <img src="https://picsum.photos/seed/picsum/1500/950" alt="pic">
                <a href="./cinder/show.php" class="btn btn-dark" role="button" aria-disabled="true">Shop now!</a>
                <span class="tag">New Products, Great Deals</span>
            </div>
        </div>
    </div>
</div>
<footer>
    <?php
    include "./static/templates/footer.html"
    ?>
</footer>
</body>
</html>