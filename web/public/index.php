<?php

include '../app/vendor/autoload.php';
$foo = new App\Foo();
$date = new DateTime();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $foo->getName(); ?></title>
</head>
<body>
    <h1>Docker <?= $foo->getName() ?></h1>
    <h2><?= $date->format('Y-m-d\TH:i:s.u'); ?></h2>
</body>
</html>
