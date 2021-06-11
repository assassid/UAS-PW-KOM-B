<?php

if(isset($_POST['simpan'])){
    include('koneksi.php');
    $battletag = $_POST['battletag'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $region = $_POST['region'];
    $update = mysqli_query($koneksi, "update profil set
    
    nama = '$nama',
    gender = '$gender',
    region = '$region'
    where battletag = '$battletag'")
        
        or die(mysqli_error());
    
    if($update)
    {
        echo '<script>alert("Friendlist berhasil di Update!")</script>';
        echo "<script>window.location = 'index.php'</script>";
    }else{
        echo '<script>alert("Friendlist gagal di Update!")</script>';
        echo "<a href = 'edit.php ?battletag = ".$battletag."'>kembali</a>";
    }
}

else{
        echo "<script>window.history.back()</script>";
}
?>