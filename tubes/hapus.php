<?php
include("config.php");
mysqli_query($mysqli,"DELETE FROM mahasiswa WHERE id_mahasiswa='$_GET[id_mahasiswa]'");
header("location:data_mahasiswa.php");
?>