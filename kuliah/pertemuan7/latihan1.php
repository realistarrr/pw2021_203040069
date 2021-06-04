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

$x = 10; 
echo $x;
echo "<br>";

function tampilX() {
   
    $y = 20; 

    global $x; 
}

tampilX();


$_GET["nama"] = "Religi Realista Esthetika";
$_GET["nrp"] = "203040069";
var_dump($_GET); 



?>

<?php 
$mahasiswa = [
    [
        "nama" => "Religi Realista Esthetika", 
        "nrp" => "203040069",
        "email" => "203040069@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rere.jpg"
    ],
    [
        "nama" => "Meishya Isnamiah", 
        "nrp" => "203040068",
        "email" => "203040068@mail.unpas.ac.id",
        "jurusan" => "Teknik Industri",
        "gambar" => "meishya.jpg"
    ],
    [
        "nama" => "Chintia Dewi Maharani", 
        "nrp" => "203040067",
        "email" => "203040067@mail.unpas.ac.id",
        "jurusan" => "Teknologi Pangan",
        "gambar" => "osin.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
 
</body>
</html>