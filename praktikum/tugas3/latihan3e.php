<?php
/*
Nama    : Religi Realista Esthetika
NRP     : 203040069
Shift   : Praktikum PW Jumat 10.00
*/
?>

<?php 
$barang = [
    [
        "picture"=>"sirenn.jpg",
        "name"=>"Siren",
        "description"=>"New stuff",
        "price"=>180000,
        "stock"=>47,
        "category"=>"Tumblr"
    ],

    [
        "picture"=>"woodd.jpg",
        "name"=>"Wood Grain",
        "description"=>"New stuff",
        "price"=>180000,
        "stock"=>70,
        "category"=>"Tumblr"
    ],

    [
        "picture"=>"mermaidd.jpg",
        "name"=>"Mermaid",
        "description"=>"New stuff",
        "price"=>180000,
        "stock"=>86,
        "category"=>"Tumblr"
    ]
   
];

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
                    <th>No</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($barang as $dagang => $barang) : ?>
                <tr>
                    <td><?= $dagang+1; ?></td>
                    <td>
                        
                            <img src="img/<?= $barang["picture"]; ?>">
                        
                    </td>
                    <td><?= $barang["name"]; ?></td>
                    <td><?= $barang["description"]; ?></td>
                    <td><?= rupiahIDR($barang["price"]) ?></td>
                    <td><?= $barang["stock"]; ?></td>
                    <td><?= $barang["category"]; ?></td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cari').DataTable();
    });
    </script>
</body>

</html>