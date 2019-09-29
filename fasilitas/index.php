<?php
include '../koneksi.php';

$sql = "SELECT * FROM berita join label using(id_label) order By id_berita desc limit 3";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8">
		<title>Fasilitas | Pondok Pesantren Al Hikmah Pedurungan Semarang</title>

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
						<form action="datacari.php">
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
											<li><a href="../kesantrian">Kesantrian</a></li>
											<li><a href="">Fasilitas</a></li>
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
		<div id="banner-area" class="banner-area" style="background-image:url(../images/banner1.jpg)">
			<div class="banner-text">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="banner-heading">
								<h1 class="banner-title">Fasilitas</h1>
								<ol class="breadcrumb">
									<li><a href="../">Home</a></li>
									<li>Fasilitas</li>
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
					<div class="col-md-8">
						<!-- <h3 class="border-title border-left mar-t0">Fasilitas di Ponpes Al Hikmah</h3> -->
						<h3 class="column-title mar-t0">Fasilitas di Ponpes Al Hikmah</h3>

						<div class="panel-group panel-classic" id="accordionA">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"> 
										<a data-toggle="collapse" data-parent="#accordionA, #accordionB" href="#1">
										Masjid</a> 
									</h4>
								</div>
								<div id="1" class="panel-collapse collapse in">
									<div class="panel-body">
										<p style="text-align: justify;">Pondok Pesantren Al Hikmah Pedurungan Semarang memiliki Masjid Besar yang bernama Masjid Nurul Hikmah. Masjid ini memiliki 3 lantai. Lantai 1 digunakan sebagai aula utama, lantai 2 adalah masjid, lantai 3 digunakan untuk jama'ah santri putri.</p>
									</div>
								</div>
							</div><!--/ Panel 1 end-->

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#2">Aula Serbaguna</a>
									</h4>
								</div>
								<div id="2" class="panel-collapse collapse">
									<div class="panel-body">
										<p style="text-align: justify;">Aula Utama Pondok Pesantren Al Hikmah Pedurungan Semarang terletak di lantai 1 Masjid. Aula utama biasanya digunakan untuk pusat kegiatan, seperti Pengaosan Kitab, Sholat Fardhu Berjama'ah, Khitobah / ngaji santri putra, dan kegiatan lainnya.</p>
									</div>
								</div>
							</div><!--/ Panel 2 end-->

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#3">Aula Putri</a> 
									</h4>
								</div>
								<div id="3" class="panel-collapse collapse">
									<div class="panel-body">
										<p style="text-align: justify;">Aula Putri merupakan aula yang terdapat didalam asrama pondok putri. Aula ini digunakan untuk kegiatan-kegiatan santri putri Pondok Pesantren Al Hikmah Pedurungan Semarang. Seperti kegiatan Khitobah, sholawatan, dan kegiatan santri putri lainnya.</p>
									</div>
								</div>
							</div><!--/ Panel 3 end-->

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#4">Asrama Putra</a> 
									</h4>
								</div>
								<div id="4" class="panel-collapse collapse">
									<div class="panel-body">
										<p style="text-align: justify;">Asrama Putra Pondok Pesantren Al Hikmah Pedurungan Semarang berada dibagian depan Pondok Pesantren yaitu dibagian utara, tepatnya setelah masuk gerbang uatam kemudian belok ke kiri. Asrama Putra memiliki 4 lantai, dimana lantai 4 nya digunakan untuk tempat menjemur pakaian.</p>
									</div>
								</div>
							</div><!--/ Panel 3 end-->

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#5">Asrama Putri</a> 
									</h4>
								</div>
								<div id="5" class="panel-collapse collapse">
									<div class="panel-body">
										<p style="text-align: justify;">Asrama putri Pondok Pesantren Al Hikmah Pedurungan Semarang berada lurus setelah masuk gerbang utama Pondok Pesantren. Asrama putri cukup luas, asrama ini mempunyai 3 sampai 4 lantai dan telah dibangun juga asrama putri baru diwilayah bagian belakang - utara Pondok Pesantren.</p>
									</div>
								</div>
							</div><!--/ Panel 3 end-->

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#6">Gedung Madin</a> 
									</h4>
								</div>
								<div id="6" class="panel-collapse collapse">
									<div class="panel-body">
										<p style="text-align: justify;">Gedung Madin Pondok Pesantren Al Hikmah Pedurungan Semarang berada tepat didepan Pondok Pesantren. Gedung Madin ini memiliki 3 lantai. Sekarang Gedung ini menjadi Gedung SMP Tahfidz Al Hikmah Semarang, yang merupakan sekolah dalam satu yayasan Pondok Pesantren.</p>
									</div>
								</div>
							</div><!--/ Panel 3 end-->

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#7">Kantin</a> 
									</h4>
								</div>
								<div id="7" class="panel-collapse collapse">
									<div class="panel-body">
										<p style="text-align: justify;">Pondok Pesantren Al Hikmah Pedurungan Semarang memiliki kantin yang berada di depan asrama putri. Di kantin ini menjual berbagai macam snack, es, dan jajanan lainnya.</p>
									</div>
								</div>
							</div><!--/ Panel 3 end-->

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#8">Dapur</a> 
									</h4>
								</div>
								<div id="8" class="panel-collapse collapse">
									<div class="panel-body">
										<p style="text-align: justify;">Pondok Pesantren Al Hikmah Pedurungan Semarang memiliki dapur yang cukup luas. Dimana disinilah tempat memasak untuk keperluan konsumsi santri-santri.</p>
									</div>
								</div>
							</div><!--/ Panel 3 end-->

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#9">Depo Air Minum</a> 
									</h4>
								</div>
								<div id="9" class="panel-collapse collapse">
									<div class="panel-body">
										<p style="text-align: justify;">Di Pondok Pesantren Al Hikmah Pedurungan Semarang memiliki depo ari minum atau persediaan isi ulang air minum untuk santri-santri. Para santri cukup mengisi lewat botol ataupun tempat minum lainnya.</p>
									</div>
								</div>
							</div><!--/ Panel 3 end-->

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#10">Komputer</a> 
									</h4>
								</div>
								<div id="10" class="panel-collapse collapse">
									<div class="panel-body">
										<p style="text-align: justify;">Mengingat seiring berkembangnya teknologi, komputer semakin sangat dibutuhkan disegala bidang terutama Pondok Pesantren. Di <b>Asrama Putra</b> Pondok Pesantren Al Hikmah memiliki 1 unit komputer, yang bisa digunakan untuk para santri putra untuk mengejakan tugas dan kepentingan lainnya.</p>
									</div>
								</div>
							</div><!--/ Panel 3 end-->
						</div><!-- Accordion end -->

					</div><!-- Col end -->

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

				</div><!-- Content row end -->

			</div><!-- Container end -->
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
								<li><a href="../kesantrian">Kesantrian</a></li>
								<li><a href="">Fasilitas</a></li>
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

					<!-- 	<div class="col-xs-12 col-sm-6">
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