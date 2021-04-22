<?php
/*
Nama    : Religi Realista Esthetika
NRP     : 203040069
Shift   : Praktikum PW Jumat 10.00
*/
?>

<?php 
    // Mengecek apakah ada id yang dikirimkan dari index.php
    // Jika tidak ada makan akan di redirect ke halaman index.php
    if(!isset($_GET["id"])){
        header("location : ../index.php");
        exit;
    }

    require 'functions.php';

    // Mengambil id dari url
    $id = $_GET["id"];

    // Melakukan query dengan parameter id yang diambil dari url
    $tumblr = query ("SELECT * FROM tumblr WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail <?= $tumblr["name"];  ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-content has-text-centered">
                <p class="mt-5 title">
                    <?= $tumblr["name"];?>
                </p>
                <img src="../assets<?= $tumblr["picture"];  ?>" alt="">
                <p class="subtitle pb-5 is-size-5"><?= $tumblr["description"];  ?></p>
            </div>
            <footer class="card-footer is-size-4">
                <p class="card-footer-item">
                <span>
                    <?= $tumblr["price"];?>
                </span>
                </p>
                <p class="card-footer-item">
                <span>
                    Stock = <?= $tumblr["stock"];?>
                </span>
                </p>
            </footer>
            <footer class="card-footer is-size-5">
                <p class="card-footer-item">
                <span>
                    <a href="../index.php">Back</a>
                </span>
                </p>
            </footer>
        </div>
    </div>
</body>
</html>