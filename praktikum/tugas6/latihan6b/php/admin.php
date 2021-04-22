<?php
/*
Nama    : Religi Realista Esthetika
NRP     : 203040069
Shift   : Praktikum PW Jumat 10.00
*/
?>

<?php 
//menghubungkan dengan file lainnya
require 'function.php';

//melakukan query
$tumblr = query ("SELECT * FROM tumblr");

if (isset($_GET['cari'])){
    $keyword = $_GET['keyword'];
    $tumblr = query("SELECT * FROM tumblr WHERE
              picture LIKE '%$keyword%' OR
              name LIKE '%$keyword%' OR
              deskription LIKE '%$keyword%' OR
              price LIKE '%$keyword%' OR
              stock LIKE '%$keyword%' OR
              category LIKE '%$keyword%'");
  } else {
      $tumblr = query("SELECT * FROM tumblr");
  }
?>

<!DOCTYPE html>
  <html>
 

    <body>
    <div class="container">

    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>

    <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button type="submit" name="cari">cari!</button>
      </form>
    
    <table>
    <thead>
        <tr>
            <th >#</th>
            <th >opsi</th>
            <th >ID</th>
            <th >Picture</th>
            <th >Name</th>
            <th >Description</th>
            <th >Price</th>
            <th >Stock</th>
            <th >Category</th>
      
    </tr>
    </thead>

    <?php if (empty($tumblr)) : ?>
    <tr>
        <td colspan="7">
            <h1>Data tidak ditemukan</h1>
        </td>
    </tr>
    <?php else : ?>


    <?php $i = 1 ?>
    <?php foreach($tumblr as $tumb) : ?>
    <tbody>
    <tr>
            <th><?= $i; ?></th>
            <td>
                <a href="ubah.php?id=<?= $tumb['id']; ?>"><button>Ubah</button></a>
                <a href="hapus.php?id=<?= $tumb["id"]; ?>" onclick="return confirm('Hapus Data??');"><button>Hapus</button></a>
            </td>
            <td><?=$tumb['id'];?></td>
            <td><img src="/latihan5a/assets/<?= $tumb['picture']; ?>" alt =""></td>
            <td><?=$tumb['name'];?></td>
            <td><?=$tumb['description'];?></td>
            <td><?=$tumb['price'];?></td>
            <td><?=$tumb['stock'];?></td>
            <td><?=$tumb['category'];?></td>
            
        </tr>
     </tbody>
     <?php $i++ ?>
    <?php endforeach; ?>
    </table>

    <div class="logout">
            <a href="logout.php">Logout</a>
    </div>

 <script type="text/javascript" src="js/materialize.min.js"></script>

    </body>
  </html>