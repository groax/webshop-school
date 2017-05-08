<?php

/**
 * Created by PhpStorm.
 * User: moese
 * Date: 8-5-2017
 * Time: 11:06
 */

require_once('web.php');

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title><?php echo title ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><?php echo title ?></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Over ons</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>

    <?php echo $controller->index() ?>

    <div class="footer">
        <hr>
    </div>
</body>
</html>