<?php
include '../koneksi.php';

$sql = "SELECT * FROM berita join label using(id_label) limit 3";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
   <title>Kesantrian | Pondok Pesantren Al Hikmah Pedurungan Semarang</title>

	<!-- Mobile Specific Metas
   ================================================== -->

   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


	<!-- CSS
   ================================================== -->

   <!-- Bootstrap -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="../css/style.css">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="../css/responsive.css">
   <!-- FontAwesome -->
   <link rel="stylesheet" href="../css/font-awesome.min.css">
   <!-- Animation -->
   <link rel="stylesheet" href="../css/animate.css">
   <!-- Owl Carousel -->
   <link rel="stylesheet" href="../css/owl.carousel.min.css">
   <link rel="stylesheet" href="../css/owl.theme.default.min.css">
   <!-- Colorbox -->
   <link rel="stylesheet" href="../css/colorbox.css">
    <!--Favicon-->
    <link rel="icon" href="../images/logo-png.png" type="image/x-icon">
   <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

   <div class="body-inner">

    <div id="top-bar" class="top-bar">
     <div class="container">
      <div class="row">
       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-right pull-right">
        <form action="../datacari">
          <div class="">
            <input type="text" name="cari" class="form-control form-control-lg" placeholder="Cari Nama Santri" autocomplete="off">
          </div>
        </form>
      </div>
      <!--/ Top social end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</div>
<!--/ Topbar end -->


<!-- Header start -->
<header id="header" class="header-two">
  <div class="container">
    <div class="row">
      <div class="navbar-header">
        <div class="logo">
          <a href="../">
            <img src="../images/logo.png" alt="">
          </a>
        </div><!-- logo end -->
      </div><!-- Navbar header end -->

      <nav class="site-navigation navigation pull-right">
        <div class="site-nav-inner">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
              <li><a href="../">Home</a>
              </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <i
                class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="../sejarah">Sejarah</a></li>
                  <li><a href="">Kesantrian</a></li>
                  <li><a href="../fasilitas">Fasilitas</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Kegiatan <i
                class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="../mingguan">Mingguan</a></li>
                  <li><a href="../acarabesar">Acara Besar</a></li>
                </ul>
              </li>
              <li><a href="../pendaftaran">Pendaftaran</a></li>
              <li><a href="../">Berita</a></li>
              <li><a href="../galeri">Galeri</a></li>
              <li><a href="../kontak">Kontak</a></li>
            </ul>
            <!--/ Nav ul end -->
          </div>
          <!--/ Collapse end -->

        </div><!-- Site Navbar inner end -->


      </nav>
      <!--/ Navigation end -->

    </div><!-- Row end -->
  </div><!-- Container end -->
</header>
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(../images/banner3.jpg)">
  <div class="banner-text">
   <div class="container">
    <div class="row">
     <div class="col-xs-12">
      <div class="banner-heading">
       <h1 class="banner-title">Santri</h1>
       <ol class="breadcrumb">
        <li><a href="../">Home</a></li>
        <li>Profil</li>
        <li>Kesantrian</li>
      </ol>
    </div>
  </div><!-- Col end -->
</div><!-- Row end -->
</div><!-- Container end -->
</div><!-- Banner text end -->
</div><!-- Banner area end --> 


<section id="main-container" class="main-container">
  <div class="container">
   <div class="row">

    <div class="col-lg-8 col-md-8 col-sm-12">
     <div class="content-inner-page">

      <h2 class="column-title mrt-0">Jenis Santri</h2>

      <div class="row">
       <div class="col-md-12">
        <p style="text-align: justify;">Santri Pondok Pesantren Al Hikmah Pedurungan Semarang terdiri dari berbagai macam umur, ada yang belasan hingga umur 20-an dan dari tingkat pendidikan yang berbeda-beda, diantaranya ada yang dari jenjang pendidikan :</p>
        <ul class="list-arrow">
          <li>SMP / MTS</li>
          <li>SMA / MAN</li>
          <li>Kuliah</li>
          <li>Tahfidz / Non Sekolah</li>
        </ul>
      </div><!-- col end -->
    </div><!-- 1st row end-->

    <div class="gap-40">
    </div>

    <h2 class="column-title mrt-0">Jumlah Santri</h2>
    <div class="row facts-area dark-bg">
      <div class="facts-wrapper">
        <div class="col-sm-4 ts-facts">
          <div class="ts-facts-img">
            <!-- <img src="images/icon-image/fact1.png" alt="" /> -->
          </div>
          <div class="ts-facts-content">
            <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span>+</h2>
            <h3 class="ts-facts-title">Total Alumni</h3>
          </div>
        </div><!-- Col end -->

        <div class="col-sm-4 ts-facts">
          <div class="ts-facts-img">
            <!-- <img src="images/icon-image/fact2.png" alt="" /> -->
          </div>
          <div class="ts-facts-content">
            <h2 class="ts-facts-num"><span class="counterUp" data-count="70">0</span>+</h2>
            <h3 class="ts-facts-title">Santri Aktif Putra</h3>
          </div>
        </div><!-- Col end -->

        <div class="col-sm-4 ts-facts">
          <div class="ts-facts-img">
            <!-- <img src="images/icon-image/fact3.png" alt="" /> -->
          </div>
          <div class="ts-facts-content">
            <h2 class="ts-facts-num"><span class="counterUp" data-count="200">0</span>+</h2>
            <h3 class="ts-facts-title">Santri Aktif Putri</h3>
            <br>
          </div>
        </div><!-- Col end -->

      </div> <!-- Facts end -->

    </div>
    <!--/ Content row end -->


    <div class="gap-40">
    </div>

    <h2 class="column-title mrt-0">Asal Daerah Santri</h2>

    <div class="row">
     <div class="col-md-12">
      <p style="text-align: justify;">Santri Pondok Pesantren Al Hikmah dari berbagai daerah di Indonesia mulai yang dari yang asli Semarang, Kabupaten / Kota sekitar Kota Semarang seperti Demak, Grobogan, Kendal, Batang, Tegal, Brebes, sampai luar pulau yaitu ada beberapa santri yang berasal dari Pulau Sumatra, yaitu dari daerah Provinsi Sumatra Selatan dan Jambi.</p>
    </div><!-- col end -->
  </div><!-- 1st row end-->
</div><!-- Content inner end -->
</div><!-- Content Col end -->

<!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> -->
  <div class="col-md-4">
    <div class="sidebar sidebar-right">
      <div class="widget recent-posts">
        <h3 class="widget-title">Berita Terbaru</h3>
        <ul class="unstyled clearfix">
          <?php while($berita = mysqli_fetch_array($result)){

            ?>
            <li>
              <div class="posts-thumb pull-left"> 
                <a href="#"><img alt="img" src="../admin/img/berita/<?= $berita['gambar']; ?>"></a>
              </div>
              <div class="post-info">
                <h4 class="entry-title">
                  <a href="../lihatberita/?judul=<?= $berita['judul'];?>"><?= $berita['judul']; ?></a>
                </h4>
                <p><small> <?= $berita['tanggal']; ?></small></p>
              </div>
              <div class="clearfix"></div>
            </li><!-- 1st post end-->
            <?php
          }
          ?>
        </ul>

      </div><!-- Recent post end -->
    </div><!-- Sidebar end -->

  </div><!-- Col end -->
</div><!-- Main row end -->
</div><!-- Conatiner end -->
</section><!-- Main container end -->

<footer id="footer" class="footer bg-overlay">
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 footer-widget footer-about">
          <h3 class="widget-title">Tentang Kami</h3>
          <img class="footer-logo" src="../images/logo.png" alt="" />
          <p>Jl. Pesantren No. 3 Pedurungan Semarang<br>alhikmahofficial@gmail.com<br>(024) 6716657<br>50192</p>
          <div class="footer-social">
            <ul>
              <li><a href="https://web.facebook.com/ppalhikmahsmg/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/ppalhikmahsmg/"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UCld4GHv_Tu-IoTsuRrGj5Yw"><i class="fa fa-youtube"></i></a></li>
              <li><a href="http://www.alhikmah.ponpes.id"><i class="fa fa-globe"></i></a></li>
            </ul>
          </div><!-- Footer social end -->
        </div><!-- Col end -->

            <!-- <div class="col-md-4 col-sm-12 footer-widget">
              <h3 class="widget-title">Working Hours</h3>
              <div class="working-hours">
                We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
                Hotline and Contact form.
                <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
                <br> Saturday: <span class="text-right">12:00 - 15:00</span>
                <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
              </div>
            </div> --><!-- Col end -->

            <div class="col-md-4 col-sm-12 col-xs-12 footer-widget">
              <h3 class="widget-title">Profil</h3>
              <ul class="list-arrow">
                <li><a href="../sejarah">Sejarah</a></li>
                <li><a href="">Kesantrian</a></li>
                <li><a href="fasilitas">Fasilitas</a></li>
                <li><a href="../mingguan">Kegiatan Mingguan</a></li>
                <li><a href="../acarabesar">Acara Besar</a></li>
              </ul>
            </div><!-- Col end -->

            <div class="col-md-4 col-sm-12 col-xs-12 footer-widget">
              <h3 class="widget-title">Menu Lainnya</h3>
              <ul class="list-arrow">
                <li><a href="../pendaftaran">Pendaftaran</a></li>
                <li><a href="../berita">Berita</a></li>
                <li><a href="../galeri">Galeri</a></li>
                <li><a href="../kontak">Kontak</a></li>
              </ul>
            </div><!-- Col end -->

          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Footer main end -->

      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="copyright-info">
                <span>Copyright © 2019 <a href="http://alhikmah.ponpes.id">Pondok Pesantren Al Hikmah Pedurungan Semarang</a></span>
              </div>
            </div>

          <!--  <div class="col-xs-12 col-sm-6">
              <div class="footer-menu">
                <ul class="nav unstyled">
                  <li><a href="about.php">About</a></li>
                  <li><a href="team.php">Our people</a></li>
                  <li><a href="faq.php">Faq</a></li>
                  <li><a href="news-left-sidebar.php">Blog</a></li>
                  <li><a href="pricing.php">Pricing</a></li>
                </ul>
              </div>
            </div> -->
          </div><!-- Row end -->

          <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
            <button class="btn btn-primary" title="Back to Top">
              <i class="fa fa-angle-double-up"></i>
            </button>
          </div>

        </div><!-- Container end -->
      </div><!-- Copyright end -->

    </footer><!-- Footer end -->


  <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <!-- Bootstrap jQuery -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <!-- Color box -->
    <script type="text/javascript" src="../js/jquery.colorbox.js"></script>
    <!-- Isotope -->
    <script type="text/javascript" src="../js/isotope.js"></script>
    <script type="text/javascript" src="../js/ini.isotope.js"></script>


    <!-- Google Map API Key-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <!-- Google Map Plugin-->
    <script type="text/javascript" src="../js/gmap3.js"></script>

    <!-- Template custom -->
    <script type="text/javascript" src="../js/custom.js"></script>

  </div><!-- Body inner end -->
</body>

</html>