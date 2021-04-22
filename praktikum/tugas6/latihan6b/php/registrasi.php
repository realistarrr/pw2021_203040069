<?php
/*
Nama    : Religi Realista Esthetika
NRP     : 203040069
Shift   : Praktikum PW Jumat 10.00
*/
?>

<?php
require 'function.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
            alert('Registrasi Gagal');
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrasi</title>
   </head>
<body>
    <form action="" method="post">

    
    <div class="login">
       <div class="profile">
    </div>
    <h3>Register Here</h3>
 
    <form>
        <P><label for="username">Username</label></P>
        <input type="text" name="username">

        <P><label for="password">Password</label></P>
        <input type="password" name="password">
         
        <input type="submit" name="register" value="Register "class="btn"></input>
    </form> 
</div>
    </form>
</body>
</html>