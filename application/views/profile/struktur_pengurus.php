<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<a class="navbar-brand" href="#">
				<img src="https://1.bp.blogspot.com/-wsOUAcFXSfA/XpXXrNA-aGI/AAAAAAAAB6o/ZQUp_L7Mer4Zld0XQ4WRqiONb3QogPHRQCLcBGAsYHQ/s1600/Logo%2BPMI.png"
					style="width: 40px; height:30px">
				KSR PMI Unit Institut Teknologi Sumatera</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
				aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ml-auto" style="margin-right: 3em">
					<li class="nav-item ">
						<a class="nav-link" href="<?php echo site_url('');?>">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Profile</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="<?php echo site_url('Profile/index/');?>">Sejarah</a>
							<a class="dropdown-item" href="<?php echo site_url('Profile/visimisi/');?>">Visi & Misi</a>
							<a class="dropdown-item" href="<?php echo site_url('Profile/strukturpengurus/');?>">Struktur Pengurus</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('Ksrpedia/index');?>">KSRPedia</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('Beritaksr/index');?>">Berita KSR</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Gallery</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="<?php echo site_url('Gallery/kegiatan');?>">Kegiatan</a>
							<a class="dropdown-item" href="<?php echo site_url('Gallery/keanggotaan');?>">Keanggotaan</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('Kontakkami/index');?>">Kontak Kami</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
</body>
</html>