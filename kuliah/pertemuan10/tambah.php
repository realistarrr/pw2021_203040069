<?php
/*
Religi Realista Esthetika
203040069
https://github.com/realistarrr/pw2021_203040069.git
Pertemuan 10 - 23 April 2021
Koneksi DB
*/
?>

<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'latihan3.php';
            </script>";
  } else {
    echo "data gagal ditambahkan";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="Nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NRP :
          <input type="text" name="Nrp" required>
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="Email" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="Jurusan" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="Gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>