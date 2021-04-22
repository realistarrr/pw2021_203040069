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

    // function untuk menambahkan data dalam database
    function tambah($data)
    {
        $conn = koneksi();

        $picture = htmlspecialchars($data['picture']);
        $name = htmlspecialchars($data['name']);
        $deskription = htmlspecialchars($data['deskription']);
        $price = htmlspecialchars($data['price']);
        $stock = htmlspecialchars($data['stock']);
        $category = htmlspecialchars($data['category']);
 

        $query = "INSERT INTO pakaian
                        VALUES
                        ('', '$picture', '$name', '$deskription', '$price', '$stock', '$category')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }

    
    function hapus($id)
    {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM tumblr WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $picture = htmlspecialchars($data['picture']);
    $name = htmlspecialchars($data['name']);
    $deskription = htmlspecialchars($data['deskription']);
    $price = htmlspecialchars($data['price']);
    $stock = htmlspecialchars($data['stock']);
    $category = htmlspecialchars($data['category']);

    $query = "UPDATE tumblr
            SET
            picture = '$picture',
            name = '$name',
            deskription = '$deskription',
            price = '$price',
            stock = '$stock',
            category = '$category',
            
            Where id = $id
            ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>";
        return false;
    }
     
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>

    
