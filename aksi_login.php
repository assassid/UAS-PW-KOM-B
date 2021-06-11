
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 session_start();

include ('koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['loginerror'] = 1;
$query = mysqli_query($koneksi, "select * from user where username = '$username' and password = '$password'");
    
$cek = mysqli_num_rows($query);

if ($cek == true){
    $_SESSION['username'] = $username;
    header ("location:index.php");
}

if($_SESSION['loginerror'] > 0){
   echo '<script>alert("Password atau Username yang anda masukkan salah!")</script>';
    echo "<script>window.location = 'Login_UTS.php'</script>";
}
?>