<?php
/*
Religi Realista Esthetika
203040069
https://github.com/realistarrr/pw2021_203040069.git
Pertemuan 6 - 18 Maret 2021
Belajar mengenai Array Assoviative
*/
?>

<?php
// $mahasiswa = [
// 	["Religi Realista Esthetika", "203040069", "Teknik Informatika", "203040069@mail.unpas.ac.id"],
// ["Meishya Isnamiah", "203040007", "Teknik Industri", "203040068@mail.unpas.ac.id"],
// ["Chintia Dewi Maharani", "203040067", "Teknologi Pangan", "203040067@mail.unpas.ac.id"]

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>	
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Email : <?= $mhs["jurusan"]; ?></li>
			<li>Jurusan  : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html> 