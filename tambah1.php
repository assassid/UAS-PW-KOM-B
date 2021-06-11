<html>
<head>
    
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<title>Add Friend Profile </title>   
    <link rel="stylesheet" type="text/css" href="tambah1.css">

<body>
    <div class="loginbox">
    <img src="Assets/friend.png" class="avatar">
        <h1>Add Friend Profile</h1>
        <form method="POST" action="tambah_proses.php">
            <p>Username</p>
            <input name="nama" type="text" placeholder="Enter Username" required>
            <p>Battletag</p>
            <input name="battletag" type="number" placeholder="Enter Battletag" required>
            <p>Gender</p>
            <select name="gender" required>
                    <option>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
             <p>Region</p>
            <input name="region" type="text" placeholder="Enter Region" required>
            <input type="submit" name="tambah" value="Tambahkan" id="simpan">
        </form>
        <a href="index.php"><input type="button" value="Kembali" id="kembali"></a>
    </div>
    
</body>
</head>
</html>