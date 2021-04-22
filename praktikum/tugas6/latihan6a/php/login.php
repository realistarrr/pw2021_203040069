<?php
/*
Nama    : Religi Realista Esthetika
NRP     : 203040069
Shift   : Praktikum PW Jumat 10.00
*/
?>

<?php
session_start();
require 'functions.php';
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if ($password == $row['password']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = $_row['id'];
        }
        if ($row['id' == $_SESSION['hash']]) {
            header("Location: admin.php");
            die;
        }
        header("Location: ..index.php");
    }
    $eror = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
    <link rel="stylesheet" href="../css/style2.css" class="href">
</head>
<body>
<form action="" method="post">
    <?php if (isset($eror)) : ?>
        <p style="color: red; font-style: italic;">Incorrect username or password!!</p>
    <?php endif; ?>
    <div class="login">
       <div class="profile">
           <img src="../assets/img/motoril.PNG">
    </div>
    <h3>Login Here</h3>
 
    <form>
        <P><label for="username">Username</label></P>
        <input type="text" name="username">

        <P><label for="password">Password</label></P>
        <input type="text" name="password">
         
        <input type="submit" name="submit" value="Login "class="btn"></input>
    </form>    
        <h4>Dont have an account ?  <a href="registrasi.php">Sign up</a></h4>
</div>
</form>
     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="js/materialize.min.js"></script>
   
</body>
</html>