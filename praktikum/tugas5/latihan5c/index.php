<?php
/*
Nama    : Religi Realista Esthetika
NRP     : 203040069
Shift   : Praktikum PW Jumat 10.00
*/
?>

<?php 
    // Menghubungkan dengan file php lainnya
    require 'php/function.php';

    // Melakukan query dengan memanggil function
    $tumblr = query("SELECT * FROM tumblr");

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
        <table id="tumblr" class="table is-bordered is-fullwidth is-hoverable">
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
            
            <tbody>
                <?php foreach($tumblr as $tumb) : ?>
                <tr>
                    <td><?= $tumb["id"]; ?></td>
                    <td> 
                            <img src="assets/<?= $tumb["picture"]; ?>" alt="">
                    </td>
                    <td><?= $tumb["name"]; ?></td>
                    <td><?= $tumb["description"]; ?></td>
                    <td><?= $tumb["price"] ?></td>
                    <td><?= $tumb["stock"]; ?></td>
                    <td><?= $tumb["category"]; ?></td>
                    <td><a href="php/detail.php?id=<?= $tumblr["id"]; ?>">Select</td>
                </tr> 
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#tumblr').DataTable();
    });
    </script>
</body>

</html>