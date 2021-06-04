<?php
/*
Religi Realista Esthetika
203040069
https://github.com/realistarrr/pw2021_203040069.git
Pertemuan 12 - 7 Mei 2021
Login dan Registrasi
*/
?>

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>