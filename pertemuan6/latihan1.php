<?php
/*
Religi Realista Esthetika
203040069
https://github.com/realistarrr/pw2021_203040069.git
Pertemuan 6 - 18 Maret 2021
Belajar mengenai Array Assoviative
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan Array</title>
	<style>
		.kotak {
			width: 30px;
			height: 30px;
			background-color: #BADA55;
			text-align: center;
			line-height: 30px;
			margin: 3px;
			float: left;
			transition: 1s;
		}
		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>

<?php 
$angka = [
	[1,2,3],
	[4,5,6],
	[7,8,9]
];
?>
<?php foreach( $angka as $a ) : ?> 
	<?php foreach( $a as $b ) : ?>
		<div class="kotak"><?= $b; ?></div>
	<?php endforeach; ?>
	<div class="clear"></div>
<?php endforeach; ?>