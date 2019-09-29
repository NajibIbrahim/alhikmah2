<?php
include 'koneksi.php';

$sql1 = "SELECT * FROM slider order By no desc";
$sql2 = "SELECT * FROM berita join label using(id_label) order By id_berita desc limit 3";
$sql3 = "SELECT * FROM galeri order By no desc limit 8";
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8">
		<title>Pondok Pesantren Al Hikmah Pedurungan Semarang</title>

	<!-- Mobile Specific Metas
		================================================== -->

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


	<!-- CSS
		================================================== -->

		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Template styles-->
		<link rel="stylesheet" href="css/style.css">
		<!-- Responsive styles-->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- FontAwesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Animation -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<!-- Colorbox -->
		<link rel="stylesheet" href="css/colorbox.css">
		<!--Favicon-->
		<link rel="icon" href="images/logo-png.png" type="image/x-icon">


		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
  <![endif]-->

</head>

<body>
 <!-- <div id="preloader"></div> -->

	<div class="body-inner">

		<div id="top-bar" class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-right pull-right">
						<form action="datacari">
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
							<a href="">
								<img src="images/logo.png" alt="" width="100%">
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

							<div class="collapse navbar-collapse navbar-responsive-collapse" >
								<ul class="nav navbar-nav">
									<li class=""><a href="">Home</a>
									</li>
									<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <i
										class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="sejarah">Sejarah</a></li>
											<li><a href="kesantrian">Kesantrian</a></li>
											<li><a href="fasilitas">Fasilitas</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Kegiatan <i
										class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="mingguan">Mingguan</a></li>
											<li><a href="acarabesar">Acara Besar</a></li>
										</ul>
									</li>
									<li><a href="pendaftaran">Pendaftaran</a></li>
									<li><a href="berita">Berita</a></li>
									<li><a href="galeri">Galeri</a></li>
									<li><a href="kontak">Kontak</a></li>
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

		<div id="box-slide" class="owl-carousel owl-theme page-slider">

			<?php while($img = mysqli_fetch_array($result1)){

				?>
				<div class="item" style="background-image:url(admin/img/slider/<?= $img['gambar']; ?>)">
					<div class="container">
						<div class="box-slider-content">
<!-- 							<div class="box-slider-text">
								<h2 class="box-slide-title">Khotimin Haflah XVIII</h2>
								<h3 class="box-slide-sub-title">Construction Industry</h3>
								<p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally diverse, forward
								thinking team looking for talent like.</p>
							</div> -->
						</div>
					</div>
				</div><!-- Item 1 end -->
				<?php
			}
			?>
		</div><!-- Box owl carousel end-->


		<section class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<img class="img-responsive" src="images/abah.png" alt="" width="">
					</div>
					<div class="col-md-2 col-xs-12">
						<br>
					</div>
					<div class="col-md-6 col-xs-12" style="text-align: left;">
						<div class="call-to-action-text">
							<!-- <h2 class="column-title"> السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</h2> -->
							<h2 class="column-title">Assalamu'alaikum Wr. Wb.</h2>
							<h4>Selamat Datang di website resmi<br>Pondok Pesantren Al Hikmah Pedurungan Semarang</h4>
						</div>
						<p><b>KH. Drs. Muhammad Qodirun Nur</b><br><i>Pendiri & Pengasuh Ponpes Al Hikmah</i></p>
					</div><!-- Col end -->
				</div>
				<!--/ Content row end -->
			</div>
			<!--/ Container end -->
		</section><!-- Content end -->


		<section class="call-to-action no-padding">
			<div class="container">
				<div class="action-style-box">
					<div class="row">
						<div class="col-md-10 col-xs-12">
							<div class="call-to-action-text">
								<h3 class="action-title">Cek Informasi Seputar Pendaftaran Santri Baru</h3>
							</div>
						</div><!-- Col end -->
						<div class="col-md-2 col-xs-12">
							<div class="call-to-action-btn">
								<a class="btn btn-primary" href="pendaftaran">Lihat Info</a>
							</div>
						</div><!-- col end -->
					</div><!-- row end -->
				</div><!-- Action style box -->
			</div><!-- Container end -->
		</section><!-- Action end -->

		<section id="main-container" class="main-container">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="images/masjid.jpg" class="owl-carousel owl-theme page-slider small-bg">        
					</div><!-- Col end -->
					<div class="col-md-6">
						<br>
						<h3 class="column-title">Profil Singkat</h3>
						<p style="text-align: justify;">Pondok Pesantren Al Hikmah Pedurungan Lor dirintis oleh KH. Drs. M. Qodirun Nur beserta istrinya Ibu Nyai Hj. Nur Mardliyah, AH. sekitar tahun 1985. Dan sampai saat ini Beliau masih menjabat sebagai Pengasuh Pondok Pesantren Al Hikmah Pedurungan Lor.</p>
						<p style="text-align: justify;">Pada awalnya Pondok Pesantren Al Hikmah Pedurungan Lor didirikan karena keinginan masyarakat sekitar untuk dapat mengaji ilmu agama dan mengaji Al-Qur’an</p>

					</div><!-- Col end -->
				</div><!-- Content row end -->

			</div><!-- Container end -->
		</section><!-- Main container end -->

		<section id="facts" class="facts-area dark-bg">
			<div class="container">
				<div class="row">
					<div class="facts-wrapper">
						<div class="col-sm-3 ts-facts">
							<div class="ts-facts-img">
								<!-- <img src="images/icon-image/fact2.png" alt="" /> -->
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span>+</h2>
								<h3 class="ts-facts-title">Total Alumni</h3>
							</div>
						</div><!-- Col end -->

						<div class="col-sm-3 ts-facts">
							<div class="ts-facts-img">
								<!-- <img src="images/icon-image/fact2.png" alt="" /> -->
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp" data-count="70">0</span>+</h2>
								<h3 class="ts-facts-title">Santri Aktif Putra</h3>
							</div>
						</div><!-- Col end -->

						<div class="col-sm-3 ts-facts">
							<div class="ts-facts-img">
								<!-- <img src="images/icon-image/fact3.png" alt="" /> -->
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp" data-count="200">0</span>+</h2>
								<h3 class="ts-facts-title">Santri Aktif Putri</h3>
							</div>
						</div><!-- Col end -->

						<div class="col-sm-3 ts-facts">
							<div class="ts-facts-img">
								<!-- <img src="images/icon-image/fact1.png" alt="" /> -->
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp" data-count="34">0</span>+</h2>
								<h3 class="ts-facts-title">Lama Tahun Berdiri</h3>
							</div>
						</div><!-- Col end -->

					</div> <!-- Facts end -->
				</div>
				<!--/ Content row end -->
			</div>
			<!--/ Container end -->
		</section><!-- Facts end -->

		<section id="news" class="news">
			<div class="container">
				<div class="row text-center">
					<h2 class="section-title">Informasi Seputar</h2>
					<h3 class="section-sub-title">Berita - Berita</h3>
				</div>
				<!--/ Title row end -->

				<div class="row">
					<?php while($berita = mysqli_fetch_array($result2)){

						?>
						<div class="col-md-4 col-xs-12">
							<div class="latest-post">
								<div class="latest-post-media">
									<a href="lihatberita/?judul=<?= $berita['judul'];?>" class="latest-post-img">
										<img class="img-responsive" src="admin/img/berita/<?= $berita['gambar']; ?>" alt="img">
									</a>
								</div>
								<div class="post-body">
									<div class="entry-header">

										<div class="post-meta">
											<span class="post-item-date">
												<i class="fa fa-clock-o"> </i> <?= $berita['tanggal']; ?>
											</span>
											<span class="post-cat">
												<i class="fa fa-tags"></i> <?= $berita['ket']; ?>
											</span>
											
										</div>
										<h4 class="post-title">
											<a href="lihatberita/?judul=<?= $berita['judul'];?>"><?= $berita['judul']; ?></a>
										</h4>

									</div>
								</div>
							</div><!-- Latest post end -->
						</div><!-- 1st post col end -->
						<?php
					}
					?>

				</div>
				<!--/ Content row end -->

				<div class="general-btn text-center">
					<a class="btn btn-primary" href="berita">Lihat Semua Berita</a>
				</div>

				<div class="gap-60"></div>

				<div class="row text-center">
					<h2 class="section-title">Foto-Foto</h2>
					<h3 class="section-sub-title">Dokumentasi</h3>
				</div>
				<!--/ Title row end -->

				<div id="isotope" class="isotope">

					<?php while($galeri = mysqli_fetch_array($result3)){

						?>
						<div class="col-md-3 col-sm-6 col-xs-12 commercial isotope-item">
							<div class="isotope-img-container">
								<a class="gallery-popup" href="../admin/img/galeri/<?= $galeri['gambar']; ?>">
									<img class="img-responsive" src="../admin/img/galeri/<?= $galeri['gambar']; ?>" alt="">
									<span class="gallery-icon"><i class="fa fa-plus"></i></span>
								</a>
								<div class="project-item-info">
									<div class="project-item-info-content">
										<h3 class="project-item-title">
											<?= $galeri['judul']; ?>
										</h3>
										<p class="project-cat"><?= $galeri['tag']; ?></p>
									</div>
								</div>
							</div>
						</div><!-- Isotope item 1 end -->
						<?php
					}
					?>
				</div><!-- Isotop end -->

				<div class="general-btn text-center">
					<a class="btn btn-primary" href="galeri">Lihat Semua Galeri</a>
				</div>

				<div class="gap-60"></div>

				<div class="row">
					<!-- Start Google Map -->
					<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
						<!-- Start Map -->
						<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.9523155538545!2d110.48176951435843!3d-7.014890870662945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708d6d00b2683f%3A0xe4d042ea0e86f3c6!2sSMP+Tahfidz+Al+Hikmah!5e0!3m2!1sen!2sid!4v1564920267930!5m2!1sen!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.9882606730741!2d110.48371272918672!3d-7.0148053686170275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708da840de44c3%3A0xd13b1ce79c970456!2sAl-Hikmah%20Islamic%20Boarding!5e0!3m2!1sen!2sid!4v1568215748721!5m2!1sen!2sid" width="100%" height="420" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						<!-- End Map -->
					</div>
					<!-- End Google Map -->
				</div>
			</div>
			<!--/ Container end -->
		</section>
		<!--/ News end -->



		<footer id="footer" class="footer bg-overlay">
			<div class="footer-main">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12 footer-widget footer-about">
							<h3 class="widget-title">Tentang Kami</h3>
							<img class="footer-logo" src="images/logo.png" alt="" />
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
								<li><a href="sejarah">Sejarah</a></li>
								<li><a href="kesantrian">Kesantrian</a></li>
								<li><a href="fasilitas">Fasilitas</a></li>
								<li><a href="mingguan">Kegiatan Mingguan</a></li>
								<li><a href="acarabesar">Acara Besar</a></li>
							</ul>
						</div><!-- Col end -->

						<div class="col-md-4 col-sm-12 col-xs-12 footer-widget">
							<h3 class="widget-title">Menu Lainnya</h3>
							<ul class="list-arrow">
								<li><a href="pendaftaran">Pendaftaran</a></li>
								<li><a href="berita">Berita</a></li>
								<li><a href="galeri">Galeri</a></li>
								<li><a href="kontak">Kontak</a></li>
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
			<script type="text/javascript" src="js/jquery.js"></script>
			<!-- Bootstrap jQuery -->
			<script type="text/javascript" src="js/bootstrap.min.js"></script>
			<!-- Owl Carousel -->
			<script type="text/javascript" src="js/owl.carousel.min.js"></script>
			<!-- Color box -->
			<script type="text/javascript" src="js/jquery.colorbox.js"></script>
			<!-- Isotope -->
			<script type="text/javascript" src="js/isotope.js"></script>
			<script type="text/javascript" src="js/ini.isotope.js"></script>


			<!-- Google Map API Key-->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
			<!-- Google Map Plugin-->
			<script type="text/javascript" src="js/gmap3.js"></script>

			<!-- Template custom -->
			<script type="text/javascript" src="js/custom.js"></script>

		</div><!-- Body inner end -->
	</body>

	</html>