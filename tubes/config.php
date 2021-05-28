<?php
$mysqli=mysqli_connect('localhost','root','','crud-mahasiswa');
mysqli_select_db($mysqli,'crud-mahasiswa') or die("database tidak ditemukan");
?>