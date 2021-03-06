<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
					<li class="nav-item dropdown">
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
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo site_url('Kontakkami/index');?>">Kontak Kami</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
		integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
	</script>

</body>
</html>