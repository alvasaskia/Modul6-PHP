<?php



// en variabel i php inleds med dollartecken

$title = "Alvas Php-sida";

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>
        <?php
        echo "Hello wonderful world";
        ?>
    </h1>
    <a href="/learn">LEARN</a>
</body>
</html>