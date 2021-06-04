<?php
/*
Religi Realista Esthetika
203040069
https://github.com/realistarrr/pw2021_203040069.git
Pertemuan 7 - 25 Maret 2021
Belajar mengenai GET & POST
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <form action="latihan4.php" method="POST">
        Masukkan nama : 
        <input type="text" name="nama">
        <button type="submit" name="submit">Kirim</button>
    </form>
    
    <br>

    <?php if(isset($_POST["kirim"])) : ?>
        <h1>Halo <?= $_POST["contoh"]; ?></h1>
    <?php endif; ?>
    
    <form method="POST">
        Masukkan sesuatu : 
        <input type="text" name="contoh">
        <button type="submit" name="kirim">Kirim</button>
    </form>
</body>
</html>