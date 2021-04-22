<?php
/*
Nama    : Religi Realista Esthetika
NRP     : 203040069
Shift   : Praktikum PW Jumat 10.00
*/
?>

<?php
session_start();
require 'function.php';

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row - mysqli_fetch_assoc(result);

    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if ($password == $row['password']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() * 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
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
           <img src="../assets/beary.jpg">
    </div>
    <h3>Login Here</h3>
 
    <form>
        <P><label for="username">Username</label></P>
        <input type="text" name="username">

        <P><label for="password">Password</label></P>
        <input type="text" name="password">
         
        <input type="submit" name="submit" value="Login "class="btn"></input>
    </form>    
        <h4>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></h4>
</div>
</form>
     <!--JavaScript at end of body for optimized loading-->
     <script type="text/javascript" src="js/materialize.min.js"></script>
   
</body>
</html>