<?php
/*
Nama    : Religi Realista Esthetika
NRP     : 203040069
Shift   : Praktikum PW Jumat 10.00
*/
?>
 
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'function.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "<script>
            alert('Data Berhasil dihapus!');
            document.location.href = 'admin.php'
        </script>";
} else {
    echo "<script>
    alert('Data Gagal dihapus!');
    document.location.href = 'admin.php';
</script>";
}
?>