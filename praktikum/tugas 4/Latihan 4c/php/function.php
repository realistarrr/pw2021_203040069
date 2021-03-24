<?php
/*
Nama    : Religi Realista Esthetika
NRP     : 203040069
Shift   : Praktikum PW Jumat 10.00
*/
?>

<?php 
    // function untuk melakukan koneksi ke database dan memilih database
    function koneksi()
    {
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "pw_tubes_203040069");

        return $conn;
    }

    // function untuk melakukan query dan memasukannya kedalam array
    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }
        return $rows;
    }

?>
