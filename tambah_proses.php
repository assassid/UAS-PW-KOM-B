<?php
    if(isset($_POST['tambah'])){
        include_once 'koneksi.php';
        $battletag = $_POST['battletag'];
        $nama = $_POST['nama'];
        $gender = $_POST['gender'];
        $region = $_POST['region'];
        
        $input = mysqli_query($koneksi, "insert into profil values('$battletag', '$nama', ' $gender', '$region')");
        
        if($input){
            echo '<script>alert("Profil Friend berhasil ditambah!")</script>';
            echo "<script>window.location='index.php'</script>";
        }else{
            echo '<script>alert("Profil Friend gagal ditambah!")</script>';
            echo "<a href = 'tambah.php'>Kembali</a>";
            
        }
    }else{
        echo "<script>window.history.back()</script>";
    }

?>