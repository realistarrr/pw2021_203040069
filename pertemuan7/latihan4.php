<?php
/*
Religi Realista Esthetika
203040069
https://github.com/realistarrr/pw2021_203040069.git
Pertemuan 7 - 25 Maret 2021
Belajar mengenai GET & POST
*/
?>

<?php 
if(!isset($_POST["nama"])){
    header("Location: latihan3.php");
}
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
    <h1>Selamat Datang <?= $_POST["nama"]; ?></h1>
</body>
</html>