<?php
/*
Nama    : Religi Realista Esthetika
NRP     : 203040069
Shift   : Praktikum PW Jumat 10.00
*/
?>
 

<?php 
require 'function.php';

$id = $_GET['id'];
$tumb = query("SELECT * FROM tumblr WHERE id = $id")[0];

if (isset($_POST["ubah"])) {
    if(tambah($_POST) > 0) {
        echo "
                <script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data gagal diubah!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<html lang="en">
<head>
    <title>Ubah Data</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body class="ubah">
<h3>Form Ubah Data Tumblr</h3>
<div class="container">
<div class="row ubah">
<form class="col s12" action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $tumb['id']; ?>">
    
      <div class="row">
        <div class="input-field col s12">
            <label for="picture">Picture</label><br>
            <input type="text" name="picture" id="picture" required><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" required><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="deskription">Description</label><br>
            <input type="text" name="deskription" id="deskription" required><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="price">Price</label><br>
            <input type="text" name="price" id="price" required><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="stock">Stock</label><br>
            <input type="text" name="stock" id="stock" required><br><br>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
            <label for="category">Category</label><br>
            <input type="text" name="category" id="category" required><br><br>
        </div>
      </div>
      
      <div class="button">
      <button type="submit" name="ubah">Ubah Data!</button>
        <button type="submit">
            <a href="index.php" style="text-decotration: none; color: black;">Kembali</a>
        </button>
        </div>
    </form>
  </div>
  </div>      
 <script type="text/javascript" src="../assets/js/materialize.min.js"></script>  
</body>
</html>