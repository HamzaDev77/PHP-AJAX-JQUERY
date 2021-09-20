
<html>
<head>
    <meta charset="utf-8">
    <title>AJAX_PHP_Example</title>
    <meta name="viewport" content="width=device-width">
</head>
<body class="row container">
<!--<img src="GallerieApplication/gif.gif"  class="col-lg-5" alt="gif">-->
<div class="col-sm-12 text-center">
    <h2 class="text-info">
        CRUD PHP AND AJAX/JQUERY
    </h2>
    <legend id="hint">
        <p >
            Here the service :
        </p>
    </legend>
</div>
<div class="row container">
    <div class="col-lg-4">
        <h4>
            HOW TO USE ?
        </h4>
        <legend></legend>
        <u><i>Step 1 :</i></u><p>Import the database <a class="navbar-link" href="Database/ajax_php.sql">.sql</a> into PhpMyAdmin</p>
        <u><i>Step 2 :</i></u><p>Click on <i><img src="GallerieApplication/add.png" height="64" width="64"></i>to add your first employee</p>
        <u><i>Step 3 :</i></u> <p>You can List employees after the insert operation <i>Click <img src="GallerieApplication/menu.png"height="64" width="64"></i> </p>
        <u><i>Step 4 :</i></u> <b>Dont forget to folow <small>  <a class="navbar-link" href="https://github.com/HamzaDev77">link :</a> </small> and fork <i>Let me know how much of stars are in the </i> SKY</b>
    </div>
    <div class="col-lg-8 col-lg-push-2 ">
        <?php require("public/add.php") ?>
    </div>
</div>
</body>
</html>