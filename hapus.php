<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <?php
        if(isset($_GET['battletag'])){
            include('koneksi.php');
            $battletag = $_GET['battletag'];
            $cek = mysqli_query($koneksi, "select battletag from profil where 
            battletag = '$battletag'") or die(mysqli_error());
            
            if(mysqli_num_rows($cek)==0){
                echo "<script>window.history.back()</script>";
            }else{
                $del = mysqli_query($koneksi, "delete from profil where battletag = '$battletag'");
                if($del){
                    echo '<script>alert("Profil Friend berhasil di hapus!")</script>';
                    echo "<script>window.location = 'index.php';</script>";
                }
                else{
                    echo '<script>alert("Profil Friend gagal di hapus!")</script>';
                    echo "<a href = 'index.php'>kembali</a>";
                }
            }
        }else{
            echo "<script>window.history.back()</script>";
        }
    ?>