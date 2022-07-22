<?php
include "api.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1><?= $data['name'] ?></h1>
    <h2><?= $data['weather'][0]['main']?>
    <h3><?= $data['clouds']['all']?></h3>

    <script script src="https://apis.google.com/js/platform.js"></script>

            <div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="full" data-theme="dark" data-count="default"></div>

<?php
    $x = 10;
    $y =  rand(0,100);
    $z = $x * $y;

    $a = sqrt($z);
?>

                <h1><?= $x ?></h1>
                <h1><?= $y ?></h1>
                <h1><?= $z ?></h1>
<p>sqrt</p>
<h1><?= $a ?></h1>


