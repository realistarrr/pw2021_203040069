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
?>

<!DOCTYPE html>
  <html>
 

    <body>
    <div class="container">

    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>
    
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

    <?php $i = 1 ?>
    <?php foreach($tumblt as $tumb) : ?>
    <tbody>
    <tr>
            <th><?= $i; ?></th>
            <td>
                <a href=""><button>Ubah</button></a>
                <a href="hapus.php?id=<?= $pkn["id"]; ?>" onclick="return confirm('Hapus Data??');"><button>Hapus</button></a>
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
    </body>
  </html>