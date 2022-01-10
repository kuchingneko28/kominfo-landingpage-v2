<?php
require_once "./includes/function.php";
// link json
$beritaKominfo = "https://kominfo-scrap.herokuapp.com/berita-kominfo";
$beritaPemerintah = "https://kominfo-scrap.herokuapp.com/berita-pemerintah";
$beritaHoax = "https://kominfo-scrap.herokuapp.com/berita-hoax";
$siaranPers = "https://kominfo-scrap.herokuapp.com/siaran-pers";

// ngambil data dari json
$pemerintah = getJson($beritaPemerintah);
$hoax = getJson($beritaHoax);
$kominfo = getJson($beritaKominfo);
$siaran = getJson($siaranPers);
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="https://kominfo.go.id/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://unpkg.com/scrollreveal"></script>
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
                <a class="nav-link" href="#berita">Berita</a>
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
            <div class="col-lg-6 hero-title">
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
            <div class="col-lg-6">
              <img class="hero-img" src="./img/bg-img.png" alt="" />
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Berita -->
    <section class="berita" id="berita">
      <div class="container">
        <div class="text-awal">
          <img class="icon" src="./img/icon-news.png" alt="" />
          <h2>Berita terbaru</h2>
        </div>
        <div class="row">
          <!-- Berita pemerintah -->
          <?php for ($i = 0; $i < 3; $i++): ?>
            <div class="col-lg-4">
              <div class="berita-box">
                <a href="view.php?url=<?php echo $pemerintah[$i][
                    "url"
                ]; ?>" target="_blank"><img class="berita-pict" src="<?php echo $pemerintah[
    $i
]["thumbnail"]; ?>" alt="" /></a>
                <div class="text-berita">
                  <a href="view.php?url=<?php echo $hoax[$i][
                      "url"
                  ]; ?>" target="_blank"><h3 class="judul"><?php echo $pemerintah[
    $i
]["title"]; ?></h3></a>
<div class="label-wrap">
                    <div class="label">
                      <span>
                        <img src="./img/icon-calendar.png" alt="" />
                        <?php echo $pemerintah[$i]["label"]["date"]; ?></span>
                    </div>
                  <div class="label">
                    <span>
                    <img src="./img/icon-tag.png" alt="" />
                      <?php echo $pemerintah[$i]["catagory"]; ?></span>
                  </div>
                  <div class="label">
                    <span>
                    <img src="./img/icon-eye.png" alt="" />
                      <?php echo $pemerintah[$i]["label"]["views"]; ?></span>
                  </div>
                  </div>
                  <p class="deskripsi"><?php echo substr(
                      $pemerintah[$i]["description"],
                      0,
                      105
                  ) . "..."; ?></p>
                  <a class="button" href="view.php?url=<?php echo $pemerintah[
                      $i
                  ]["url"]; ?>" target="_blank" >Readmore</a>
                </div>
              </div>
            </div>
              <?php endfor; ?>
                  
        <!-- Berita kominfo -->
        <?php for ($i = 0; $i < 3; $i++): ?>
            <div class="col-lg-4">
              <div class="berita-box">
              <a href="view.php?url=<?php echo $kominfo[$i][
                  "url"
              ]; ?>" target="_blank"><img class="berita-pict kominfo" src="<?php echo $kominfo[
    $i
]["thumbnail"]; ?>" alt="" /></a>
                <div class="text-berita">
                <a href="view.php?url=<?php echo $kominfo[$i][
                    "url"
                ]; ?>" target="_blank"><h3 class="judul"><?php echo $kominfo[
    $i
]["title"]; ?></h3></a>
                  <div class="label-wrap">
                    <div class="label">
                      <span>
                      <img src="./img/icon-calendar.png" alt="" />
                        <?php echo $kominfo[$i]["label"]["date"]; ?></span>
                    </div>
                  <div class="label">
                    <span>
                    <img src="./img/icon-tag.png" alt="" />
                      <?php echo $kominfo[$i]["catagory"]; ?></span>
                  </div>
                  <div class="label">
                    <span>
                    <img src="./img/icon-eye.png" alt="" />
                      <?php echo $kominfo[$i]["label"]["views"]; ?></span>
                  </div>
                  </div>
                  <p class="deskripsi"><?php echo substr(
                      $kominfo[$i]["description"],
                      0,
                      105
                  ) . "..."; ?></p>
                  <a class="button" href="view.php?url=<?php echo $kominfo[$i][
                      "url"
                  ]; ?>" target="_blank" >Readmore</a>
                </div>
              </div>
            </div>
              <?php endfor; ?>
              
              <!-- Siaran Pers -->
              <?php for ($i = 0; $i < 3; $i++): ?>
            <div class="col-lg-4">
              <div class="berita-box">
              <a href="view.php?url=<?php echo $siaran[$i][
                  "url"
              ]; ?>" target="_blank"><img class="berita-pict" src="<?php echo $siaran[
    $i
]["thumbnail"]; ?>" alt="" /></a>
                <div class="text-berita">
                <a href="view.php?url=<?php echo $siaran[$i][
                    "url"
                ]; ?>" target="_blank"><h3 class="judul"><?php echo $siaran[$i][
    "title"
]; ?></h3></a>
                  <div class="label-wrap">
                    <div class="label">
                      <span>
                      <img src="./img/icon-calendar.png" alt="" />
                        <?php echo $siaran[$i]["label"]["date"]; ?></span>
                    </div>
                  <div class="label">
                    <span>
                    <img src="./img/icon-tag.png" alt="" />
                      <?php echo $siaran[$i]["catagory"]; ?></span>
                  </div>
                  <div class="label">
                    <span>
                    <img src="./img/icon-eye.png" alt="" />
                      <?php echo $siaran[$i]["label"]["views"]; ?></span>
                  </div>
                  </div>
                <p class="deskripsi"><?php echo substr(
                    $siaran[$i]["description"],
                    0,
                    105
                ) . "..."; ?></p>
                  <a class="button" href="view.php?url=<?php echo $siaran[$i][
                      "url"
                  ]; ?>" target="_blank">Readmore</a>
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
          <?php for ($i = 0; $i < 3; $i++): ?>
            <div class="col-lg-4">
              <div class="berita-box">
                <a href="view.php?url=<?php echo $hoax[$i][
                    "url"
                ]; ?>" target="_blank"><img class="berita-pict" src="<?php echo $hoax[
    $i
]["thumbnail"]; ?>"  alt="" /></a>
                <div class="text-berita">
                <a href="view.php?url=<?php echo $hoax[$i][
                    "url"
                ]; ?>" target="_blank"><h3 class="judul"><?php echo $hoax[$i][
    "title"
]; ?></h3></a>
                  <div class="label-wrap">
                    <div class="label">
                      <span>
                      <img src="./img/icon-calendar.png" alt="" />
                        <?php echo $hoax[$i]["label"]["date"]; ?></span>
                    </div>
                  <div class="label">
                    <span>
                    <img src="./img/icon-tag.png" alt="" />
                      <?php echo $hoax[$i]["catagory"]; ?></span>
                  </div>
                  <div class="label">
                    <span>
                    <img src="./img/icon-eye.png" alt="" />
                      <?php echo $hoax[$i]["label"]["views"]; ?></span>
                  </div>
                  </div>
                  <a class="button" href="view.php?url=<?php echo $hoax[$i][
                      "url"
                  ]; ?>" target="_blank">Readmore</a>
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
          <div class="col-lg-4">
            <div class="wrap-content show">
            <div class="address-wrap">
              <div class="logo-footer">
                <img class="logo" src="./img/logo-small.png" alt="" />
            </div>
              <div class="address">
                <div class="address-box">
                  <img src="./img/icon-map.png" alt="" />
                  <p>Jl. Medan Merdeka Barat no. 9, Jakarta 10105</p>
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
          <div class="col-lg-5">
          <div class="wrap-content hide">
            <div class="text-footer">
              <img class="icon" src="./img/icon-twitter.png" alt="" />
              <p>Terbaru dari twitter</p>
            </div>
            <div class="twitter">
              <a class="twitter-timeline" data-width="400" data-height="370" href="https://twitter.com/kemkominfo?ref_src=twsrc%5Etfw">Tweets by kemkominfo</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>  
          </div>
          <div class="col-lg-3">
            <div class="wrap-content hide">
            <div class="text-footer">
              <img class="icon" src="./img/icon-task.png" alt="" />
              <p>Mentri Kominfo</p>
            </div>
            <div class="profile">
              <p class="nama shape">Bapak Johnny Gerard Plate, S.E.</p>
              <img class="profile" src="http://kominfo.go.id/images/menteri.jpeg" width="200px" alt="">
            </div>
          </div>  
          </div>
        </div>  
        <hr />
        <div class="copyright">
          <p>Hak Cipta © 2021 Kementerian Komunikasi dan Informatika RI</p>
          <p>Create with <img src="./img/icon-heart.png" width="13px" alt=""> by <a href="https://github.com/kuchingneko28" target="_blank">KuchingNeko</a></p>
        </div>
      </div>
    </footer>
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
