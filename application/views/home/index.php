	<nav class="navbar navbar-transparent navbar-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar bar1"></span>
					<span class="icon-bar bar2"></span>
					<span class="icon-bar bar3"></span>
				</button>
				<a href="#home">
					<!-- Navbar Judul Pojok Kiri -->
					<div class="logo-container">
						<div class="logo">
							<img src="<?= base_url('assets2'); ?>/img/asgardev_logo.png" alt="ASGARDEV Laptop Clinic" style="border-radius: 4px; object-fit: cover;">
						</div>
						<div class="brand" style="text-transform: none; font-size: 15px; font-weight: 700; line-height: 1.2; padding-top: 5px;">
							ASGARDEV <br>Laptop Clinic
						</div>
					</div>
					<!-- End of Navbar Judul Pojok Kiri -->
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="example">
				<!-- Navbar Kanan -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#home" class="page-scroll">
							<i class="fa fa-home"></i>
							Home
						</a>
					</li>
					<li>
						<a class="page-scroll" href="#about">
							<i class="fa fa-info-circle"></i>
							About Us
						</a>
					</li>
					<li>
						<a href="<?= base_url('auth'); ?>">
							<i class="fa fa-sign-in"></i>
							Login
						</a>
					</li>
				</ul>
				<!-- End of Navbar Kanan -->
			</div>
			<!-- /.navbar-collapse -->
		</div>
	</nav>
	<div class="wrapper">
		<div class="parallax filter-gradient blue" data-color="blue">
			<div class="container">
				<div class="row">
					<div class="col-md-7  hidden-xs">
						<div class="parallax-image">
							<img src="<?= base_url('assets2'); ?>/img/laptop_diagnostic.png" style="border-radius: 16px; box-shadow: 0 15px 35px rgba(0,0,0,0.15); border: 4px solid rgba(255,255,255,0.8); max-height: 350px; object-fit: cover;" />
						</div>
					</div>
					<div class="col-md-5">
						<div class="description text-center">
							<h2>ASGARDEV Laptop Clinic</h2>
							<br>
							<h5>Aplikasi Sistem Pakar Untuk Diagnosa Kerusakan Laptop & Komputer</h5>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="section section-no-padding page-scroll" id="about">
			<div class="parallax filter-gradient blue" data-color="blue">
				<div class="parallax-background">
					<img class="parallax-background-image flipped" src="<?= base_url('assets2'); ?>/img/showcases/showcase-2/home_6.jpg">
				</div>
				<div class="info">
					<h1>About Us</h1>
					<p>Sistem Pakar ini dibangun untuk membantu para pengguna atau teknisi computer/laptop dalam mendiagnosa kerusakan hardwarenya.Sistem ini memiliki 5 jenis kerusakan,berdasarkan 13 gejala yang sering dialami.
					</p>
				</div>
			</div>
		</section>