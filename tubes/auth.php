<?php
session_start();

include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($mysqli,"SELECT * FROM user WHERE username='$username' AND password='$password' ");

$cek = mysqli_num_rows($login);

if($cek > 0){
	$_SESSION["username"] = $username;
	header("location:data_mahasiswa.php");
}else{
	header("location:index.php");
}

?>