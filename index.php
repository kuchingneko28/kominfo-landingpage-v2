<?php
require_once "./functions.php";
// link json
$beritaKominfo = "https://kominfo-scrap.herokuapp.com/berita-kominfo";
$beritaPemerintah = "https://kominfo-scrap.herokuapp.com/berita-pemerintah";
$beritaHoax = "https://kominfo-scrap.herokuapp.com/berita-hoax";

// ngambil data dari json
$pemerintah = getJson($beritaPemerintah);
$hoax = getJson($beritaHoax);
$kominfo = getJson($beritaKominfo);


?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="https://kominfo.go.id/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Kominfo - Wangy Wangy</title>
  </head>
  <body>
    <!-- Background Hero -->
    <div class="bg-hero">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-transparant">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="./img/logo-small.png" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Informasi Publik</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- Hero -->
     <section class="hero">
        <div class="container">
          <div class="row">
            <div class="col-md-6 hero-title">
              <h1>Kementerian Komunikasi dan Informatika Republik Indonesia</h1>
              <p>Kementerian Komunikasi dan Informatika Republik Indonesia adalah kementerian dalam Pemerintah Indonesia yang membidangi urusan komunikasi dan informatika.</p>
              <div class="herobox-wrap">
                <a href="https://www.facebook.com/Kemkominfo" target="_blank">
                  <div class="hero-box"><img src="./img/logo-fb.svg" alt="" /></div>
                </a>
                <a href="https://www.instagram.com/kemenkominfo/" target="_blank">
                  <div class="hero-box"><img src="./img/logo-instagram.png" alt="" /></div>
                </a>
                <a href="https://twitter.com/kemkominfo" target="_blank">
                  <div class="hero-box"><img src="./img/logo-twitter.png" alt="" /></div>
                </a>
                <a href="mailto:humas@mail.kominfo.go.id" target="_blank">
                  <div class="hero-box"><img src="./img/logo-gmail.png" alt="" /></div>
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <img class="hero-img" src="./img/bg-img.png" alt="" />
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Berita -->
    <section class="berita">
      <div class="container">
        <div class="text-awal">
          <img class="icon" src="./img/icon-news.png" alt="" />
          <h2>Berita terbaru</h2>
        </div>
        <div class="row">
          <!-- Berita pemerintah -->
        <?php for($i = 0; $i < 3; $i++) : ?>
            <div class="col-md-4">
              <div class="berita-box">
                <img class="berita-pict" src="<?php echo $pemerintah[$i]["thumbnail"]; ?>" alt="" />
                <div class="text-berita">
                  <h3 class="judul"><?php echo $pemerintah[$i]["title"]; ?></h3>
                  <div class="label post">
                  <img src="./img/icon-calender.png" alt="" />
                  <span><?php echo $pemerintah[$i]["label"]["date"]; ?></span>
                </div>
                <div class="label catagory">
                  <img src="./img/icon-tag.png" alt="" />
                  <span><?php echo $pemerintah[$i]["catagory"]; ?></span>
                </div>
                <div class="label total-view">
                  <img src="./img/icon-eye.png" alt="" />
                  <span><?php echo $pemerintah[$i]["label"]["views"]; ?></span>
                </div>
                  <p class="deskripsi"><?php echo $pemerintah[$i]["description"]; ?></p>
                  <a class="button" href="https://kominfo.go.id<?php echo $pemerintah[$i]["url"] ?>" target="_blank" >Readmore</a>
                </div>
              </div>
            </div>
              <?php endfor; ?>    
        <!-- Berita kominfo -->
        <?php for($i = 0; $i < 3; $i++) : ?>
            <div class="col-md-4">
              <div class="berita-box">
                <img class="berita-pict kominfo" src="<?php echo $kominfo[$i]["thumbnail"]; ?>" alt="" />
                <div class="text-berita">
                  <h3 class="judul"><?php echo $kominfo[$i]["title"]; ?></h3>
                  <div class="label post">
                  <img src="./img/icon-calender.png" alt="" />
                  <span><?php echo $kominfo[$i]["label"]["date"]; ?></span>
                </div>
                <div class="label catagory">
                  <img src="./img/icon-tag.png" alt="" />
                  <span><?php echo $kominfo[$i]["catagory"]; ?></span>
                </div>
                <div class="label total-view">
                  <img src="./img/icon-eye.png" alt="" />
                  <span><?php echo $kominfo[$i]["label"]["views"]; ?></span>
                </div>
                  <p class="deskripsi"><?php echo $kominfo[$i]["description"]; ?></p>
                  <a class="button" href="https://kominfo.go.id<?php echo $kominfo[$i]["url"] ?>" target="_blank" >Readmore</a>
                </div>
              </div>
            </div>
              <?php endfor; ?>
            </div>
      </div>
    </section>
    <!-- Hoax -->
    <section class="hoax">
      <div class="container">
        <div class="text-awal">
          <img class="icon" src="./img/icon-message.png" alt="" />
          <h2>Laporan isu hoax</h2>
        </div>
        <div class="row">
          <?php for($i = 0; $i < 3; $i++) : ?>
            <div class="col-md-4">
              <div class="berita-box">
                <img class="berita-pict" src="<?php echo $hoax[$i]["thumbnail"]; ?>" height="265px" alt="" />
                <div class="text-berita">
                  <h3 class="judul"><?php echo $hoax[$i]["title"]; ?></h3>
                  <div class="label post">
                  <img src="./img/icon-calender.png" alt="" />
                  <span><?php echo $hoax[$i]["label"]["date"]; ?></span>
                </div>
                <div class="label catagory">
                  <img src="./img/icon-tag.png" alt="" />
                  <span><?php echo $hoax[$i]["catagory"]; ?></span>
                </div>
                <div class="label total-view">
                  <img src="./img/icon-eye.png" alt="" />
                  <span><?php echo $hoax[$i]["label"]["views"]; ?></span>
                </div>
                  <a class="button" href="https://kominfo.go.id<?php echo $kominfo[$i]["url"] ?>" target="_blank">Readmore</a>
                </div>
              </div>
            </div>
              <?php endfor; ?>
            </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-4">
            <div class="wrap-content show">
            <div class="address-wrap">
            <div class="logo-footer">
              <img class="logo" src="./img/logo-small.png" alt="" />
            </div>
              <div class="address">
                <div class="address-box">
                  <img src="./img/icon-map.png" alt="" />
                  <p>Jl. Medan Merdeka Barat no. 9, Jakarta 10110</p>
                </div>
                <div class="address-box">
                  <img src="./img/icon-phone.png" alt="" />
                  <p>(021) 3452841</p>
                </div>
                <div class="address-box">
                  <img src="./img/icon-email.png" alt="" />
                  <p>humas@mail.kominfo.go.id</p>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
          <div class="wrap-content hide">

            <div class="text-footer">
              <img class="icon" src="./img/icon-twitter.png" alt="" />
              <p>Terbaru dari twitter</p>
            </div>
            <div class="twitter">
              <a class="twitter-timeline" data-width="400" data-height="330" href="https://twitter.com/kemkominfo?ref_src=twsrc%5Etfw">Tweets by kemkominfo</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>  
          </div>
          <div class="col-md-3">
          <div class="wrap-content hide">

            <div class="text-footer">
              <img class="icon" src="./img/icon-task.png" alt="" />
              <p>Mentri Kominfo</p>
            </div>
            <div class="profile">
              <img class="profile" src="http://kominfo.go.id/images/menteri.jpeg" width="200px" alt="">
            </div>
            </div>  
          </div>
        </div>  
      
      <br>
        <hr />
        <div class="copyright">
          <p>Create with love by KuchingNeko</p>
          <p>Hak Cipta © 2021 Kementerian Komunikasi dan Informatika RI</p>
        </div>
      </div>
    </footer>
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
  </body>
</html>
