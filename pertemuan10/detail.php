<?php
/*
Religi Realista Esthetika
203040069
https://github.com/realistarrr/pw2021_203040069.git
Pertemuan 10 - 23 April 2021
Koneksi DB
*/
?>

<?php
require 'functions.php';

// ambil dari URL
$id = $_GET['id'];
// query mahasiswa berdasakan id 
$m = query("SELECT * FROM mahasiswa WHERE id = $id");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $m['Gambar']; ?>"></li>
    <li>Nrp : <?= $m['Nrp']; ?></li>
    <li>Nama : <?= $m['Nama']; ?></li>
    <li>Email : <?= $m['Email']; ?></li>
    <li>Jurusan : <?= $m['Jurusan']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
  </ul>
</body>

</html>