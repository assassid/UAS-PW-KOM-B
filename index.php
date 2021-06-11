<?php
    session_start();
    include "koneksi.php";
    if(!isset($_SESSION['username'])){
        header("location:Login_UTS.php");
}
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
   
}

?>

<!doctype html>
<html lang="en" class="whole">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style_UTS.css">
    <link rel="icon" href="Assets/owblack.png">
      
    <title>Overwatch Main Page</title>
  </head>
    
<header>
<!--awal navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 bg-white sticky-top">
  <a class="navbar-brand" href="https://playoverwatch.com/en-us/">
     <img src="Assets/logo.png" width="30" height="30" class="d-inline-block align-top" id="logoow"><hh> Overwatch™</hh> 
    </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contents
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#MTH">Characters</a>
          <a class="dropdown-item" href="#"> Maps</a>
          <a class="dropdown-item" href="#">Modes</a>
          <a class="dropdown-item" href="#">Events</a>
          <a class="dropdown-item" href="#">Comunity</a>
          <a class="dropdown-item" href="#">Updates</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Others</a>
        </div>
      </li>
        </ul>
      <ul class="navbar-nav ml-auto">
      <li class="nav-item mr-3">
        <button class="btn btn-sm btn-outline-success" type="button"><a class="nav-link enabled font-weight-bold" href="" tabindex="-1" aria-disabled="true" >My Profile</a></button>
      </li>
       
    <li class="nav-item">
        <button class="btn btn-sm btn-outline-danger" type="button">
<a class="nav-link enabled font-weight-bold" href="aksi_logout.php" id="logout" ml>Logout</a></button>
      </li>
    </ul>
    
  </div>
</nav>
<!--akhir navbar-->
    
  <videobg>
    <video autoplay muted loop id=vid>
  <source src="Assets/owvid.mp4" type="video/mp4">
</video>   
  </videobg>  
  
    <div class="concontainer">
    <div class="contentvid" id="contentvid">  
  <h1 class="text-center font-italic" id="playow">PLAY OVERWATCH™</h1>
  <p class="text-center">Mainkan Overwatch sekarang di:</p>
<img src="Assets/platform.png" class="img-fluid w-50 rounded mx-auto d-block " alt="Responsive image">
</div>
 </div>
</header>
    
<body>
    
    <!--awal jumbotron 1-->
<div class="jumbotron jumbotron-fluid mb-5">
  <div class="container">
    <h1 class="display-4">FRIENDLIST PROFILE DETAIL</h1>
    <p class="lead"><table class="table table-striped table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Battletag</th>
      <th scope="col">Username</th>
      <th scope="col">Gender</th>
      <th scope="col">Region</th>
      <th scope="col">Opsi</th> 
    </tr>
      
      <div class="add">
      <a href="tambah1.php"><input type="submit" value="Tambah Data"></a>
      </div>
      
      <?php
        include_once 'koneksi.php';
        $no=1;
      $data = mysqli_query($koneksi, "select * from profil");
      while ($d = mysqli_fetch_array($data)){
      ?>
      <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['battletag']; ?></td>
          <td><?php echo $d['nama']; ?></td>
          <td><?php echo $d['gender']; ?></td>
          <td><?php echo $d['region']; ?></td>
          <td>
            <div class="EH"> 
            <a href="edit1.php ?battletag=<?php echo $d['battletag'];?>" id="edit"><input type="submit" value="Edit"></a>
            <a href="hapus.php ?battletag=<?php echo $d['battletag'];?>" id="hapus"><input type="submit" value="Hapus"></a>
             </div>      
          </td>
      </tr>
      
    <?php    
      }
      ?>
  </thead>
      </table>
  </div>
    
</div>    
<!--akhir jumbotron 1--> 
   <h2 id="MTH">MEET THE HERO</h2>
    <cardbody>
    <div class="cardcontainer">
        <div class="box">
        <h2 class="name">TRACER</h2>
            <a class="buy">DAMAGE</a>
            <div class="circle"></div>
            <img src="Assets/tracerno.png" class="product">
        </div>
        <div class="box">
        <h2 class="name">MERCY</h2>
            <a class="buy">SUPPORT</a>
            <div class="circle"></div>
            <img src="Assets/mercy.png" class="product">
        </div>
        <div class="box">
        <h2 class="name">REINHARDT</h2>
            <a class="buy">TANK</a>
            <div class="circle"></div>
            <img src="Assets/reinno.png" class="product">
        </div>
    
    </div>
    <script src="vanilla-tilt.min.js"></script>
    <script>
    VanillaTilt.init(document.querySelectorAll(".box"), {
		max: 25,
		speed: 400
	});
    </script>
</cardbody>
    <div class="trace">
    <img src="Assets/tracer.png" class="rounded float-left w-50 h-25" alt="..." id="tracer">
     </div>
<!--awal jumbotron 1-->
<div class="jumbotron jumbotron-fluid mb-5">
  <div class="container">
    <h1 class="display-4">DUNIA MEMBUTUHKAN PAHLAWAN</h1>
    <p class="lead">Di saat dunia sedang dalam masa krisis, sebuah tim pahlawan bersatu untuk memulihkan kedamaian ke dunia yang telah tercerai-berai oleh peperangan. Organisasi ini, yang dikenal dengan sebutan Overwatch, mengakhiri krisis dan membantu mempertahankan kedamaian untuk generasi masa depan. Setelah bertahun-tahun berlalu, pengaruh Overwatch memudar dan tidak lama tim ini pun harus bubar. Sekarang disaat tidak ada yang melindungi dunia, konflik sekali lagi muncul. Overwatch mungkin telah hilang…tetapi dunia masih membutuhkan pahlawan.</p>
  </div>
     
</div>    
<!--akhir jumbotron 1--> 
    
<!--awal carousel-->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Assets/modes.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>PLAY IN 8 DIFFERENT MAIN MODES, ARCADE MODES,COMMUNITY MODES, AND A LOT MORE</h4>
        <p>Overwatch menyediakan 8 mode utama untuk dimainkan di official match, berbagai mode unik di arcade mode dan pemain bahkan bisa membuat mode tersendiri di community server.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Assets/paris.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>ENJOY THE GAME IN OVER 25+ STUNNING MAPS</h4>
        <p>Map-map di Overwatch telah dibuat oleh para developer handal sehingga tampak indah dan menarik untuk dimainkan.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Assets/arc.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>ENJOY MANY INGAME EVENTS</h4>
        <p>setiap tahunnya, Overwatch menyediakan berbagai event-event dengan berbagai content menarik didalamnya seperti, Halloween, Summer Games, Winter Wonderland, Archives dan banyak lagi.</p>
      </div>
    </div>
      <div class="carousel-item">
      <img src="Assets/rosters.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>PLAY WITH 3 CLASSES AND 32 PLAYABLE CHARACTERS</h4>
        <p>Overwatch menyediakan 3 classes (tank, Damage, Dan support) dan 32 karakter unik di dalam game sehingga para player dapat mencari komposisi tim terbaik untuk menang.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Assets/now.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>PLAY OVERWATCH™ NOW</h4>
        <p>mainkan Overwatch sekarang. tersedia untuk platform PC, Playstation 4, XBOX ONE, dan Nintendo Switch.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--akhir carousel-->
    
<!--awal jumbotron 2-->
<div class="jumbotron jumbotron-fluid ">
  <div class="container">
    <h1 class="display-4">BECOME THE HEROES</h1>
    <p class="lead">Overwatch adalah team-based multiplayer first-person shooter yang dikembangkan dan dipublikasikan oleh Blizzard Entertainment pada tahun 2016. Dideskripsikan sebagai "Hero Shooter", Overwatch memasukkan pemain kedalam 2 tim yang masing-masing beranggotakan 6 orang, dengan tiap pemain dapat memilih berbagai karakter dengan kemampuan unik, yang dikenal dengan "Heroes".</p> 
  </div>
</div>    
<!--akhir jumbotron 2-->  

<!--awal card grid-->
    <div class="container" id="cardcon">
    <div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <img src="Assets/league.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Overwatch League 2021</h5>
        <p class="card-text">The 2021 schedule is live, and we’re officially kicking things off on Friday, April 16, with the first of four tournament cycles in the regular season.</p>
          <button type="button" class="btn btn-info">see more...</button>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="Assets/dev.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Inside The Development Team</h5>
        <p class="card-text">As of September 2, 2016, there are roughly 100 developers in Team 4, with five disciplines: Audio, Art, Engineering, Production, and Design. There are also two full-time Business Operations people, an esports director, a dedicated Quality Assurance team, and a dedicated Community team.</p>
          <button type="button" class="btn btn-info">see more...</button>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="Assets/summer.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Be Ready For Summer Game 2021</h5>
        <p class="card-text">The Overwatch Summer Games are back, and this year we’re challenging you to step onto the field and bring your A game! Win matches to earn weekly rewards, and net some goals in the all-new spin on classic Lúcioball, Lúcioball Remix.</p>
          <button type="button" class="btn btn-info">see more...</button>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="Assets/ow2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Overwatch 2 Updates</h5>
        <p class="card-text">Reunite and stand together in a new age of heroes. Overwatch® 2 builds on an award-winning foundation of epic competitive play, and challenges the world’s heroes to team up, power up, and take on an overwhelming outbreak of threats around the globe.</p>
          <button type="button" class="btn btn-info">see more...</button>
      </div>
    </div>
  </div>
</div>
</div>
<!--akhir card grid-->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
 
<!--script video-->
<script type="text/javascript">
    let video = document.querySelector('video');
   
        window.addEventListener('scroll', function(){
            let value = 1 + window.scrollY/ -500;
            video.style.opacity = value;
            contentvid.style.opacity = value;
            
                                })
    </script>
    
<!--script tracer-->  
<script type="text/javascript">
    
     let tracer = document.getElementById('tracer');
      let contentvid = document.getElementById('contentvid');

        window.addEventListener('scroll', function(){
            let value = 1 + window.scrollY;
            tracer.style.marginLeft  = value * 0.2 + 'px';
            contentvid.style.marginTop = value + 'px';
    
            
                                })
    </script>
    
    <script type="text/javascript">
        let playow = document.getElementById('playow');
        window.addEventListener('scroll', function(){
            let value =  115 + window.scrollY/ -5;
    
            playow.style.fontSize = value + 'px';
            
                                })
    </script>
    
    
<!--logout confirmation-->   
<script>
$(function(){
    $('a#logout').click(function(){
        if(confirm('Are you sure want to logout?')) {
            return true;
        }

        return false;
    });
});
    
</script>
    <!--akhir logout confirmation--> 
    
  <!--delete data confirmation--> 
  <script>
$(function(){
    $('a#hapus').click(function(){
        if(confirm('Are you sure want to delete this profile?')) {
            return true;
        }

        return false;
    });
});
    
</script>
  <!--delete data confirmation--> 
        
</body>
<footer class="text-center mt-3 mb-3">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">CONTACT US!</h1>
    <p class="lead">Blizzard teams are ready to help and answer all of your problems and questions!</p>
      
 <img src="Assets/contact.png" class="rounded float-center w-25" alt="...">
      
  </div>
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="#">Contacts</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Support</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Store</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">About</a>
  </li>
</ul>
</div>
<h6 class>©2021 BLIZZARD ENTERTAINMENT, INC. ALL RIGHTS RESERVED.
All trademarks referenced herein are the properties of their respective owners.</h6>    
    
</footer>
</html>