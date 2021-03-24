<?php
/*
Nama    : Religi Realista Esthetika
NRP     : 203040069
Shift   : Praktikum PW Jumat 10.00
*/
?>

<?php 

// Membuat koneksi ke database
$connect = mysqli_connect("localhost", "root", "");
// Memilih database
mysqli_select_db($connect, "pw_tubes_203040069");
//Melakukan query dari database
$result = mysqli_query($connect, "SELECT * FROM tumblr");

function rupiahIDR($duit){
    return "Rp" . number_format($duit,2,',','.');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbucks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>

</head>

<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Category</th>
                </tr>
            </thead>
            
                <?php while($row = mysqli_fetch_assoc ($result)) : ?>
                <tr>
                    <td><?= $row["id"]; ?></td>
                    <td> 
                            <img src="assets/<?= $row["picture"]; ?>">
                    </td>
                    <td><?= $row["name"]; ?></td>
                    <td><?= $row["description"]; ?></td>
                    <td><?= rupiahIDR($row["price"]) ?></td>
                    <td><?= $row["stock"]; ?></td>
                    <td><?= $row["category"]; ?></td>
                </tr> 
                <?php endwhile; ?>

        </table>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cari').DataTable();
    });
    </script>
</body>

</html>