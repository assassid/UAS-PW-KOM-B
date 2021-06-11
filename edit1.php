<html>
<head>
    
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
     <?php
        
        include('koneksi.php');
        $battletag = $_GET['battletag'];
        $show = mysqli_query($koneksi, "select * from profil where battletag = '$battletag'");
        if(mysqli_num_rows($show) == 0){
            echo '<script>windows.history.back()</script>';
        }else{
            $d = mysqli_fetch_assoc($show);
        }
        ?>
    
<title>Friend Profile Edit</title>   
    <link rel="stylesheet" type="text/css" href="edit1.css">

<body>
    <div class="loginbox">
    <img src="Assets/wrench.png" class="avatar">
        <h1>Edit Friend Profile</h1>
        
        <form method="POST" action="edit_proses.php">
            <input type="hidden" name="battletag" value="<?php echo $battletag; ?>">
            <p>Username</p>
           <input type="text" name="nama" size="33" value="<?php echo $d['nama'];?>" required>
            <p>Gender</p>
            <select name="gender" required>
                        <option value="">pilih</option>
                            <option value="Male" <?php if($d['gender'] == 'Male'){echo 'selected';} ?>>Male</option>
                            <option value="Female" <?php if($d['gender'] == 'Female'){echo 'selected';} ?>>Female</option>
                        </select> 
             <p>Region</p>
            <input type="text" name="region" size="33" value="<?php echo $d['region'];?>" required>
            <input type="submit" name="simpan" value="Simpan" id="simpan">
        </form>
        
        <a href="index.php"><input type="button" value="Kembali" id="kembali"></a>
    </div>
    
</body>
</head>
</html>