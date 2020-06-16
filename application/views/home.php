<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v4.0.1">
	<title>KSR PMI Unit Institut Teknologi Sumatera</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

	</style>
	<!-- Custom styles for this template -->

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
					<li class="nav-item active">
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
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('Kontakkami/index');?>">Kontak Kami</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main role="main">

		<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 4em;">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?= base_url()?>assets/img/slidekesatu.png" class="img-fluid" alt="1">
					<div class="container">
						<div class="carousel-caption">
							<h1>KSR PMI Unit Institut Teknologi Sumatera</h1>
							<p>Berkiprah di bumi Andalas!</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?= base_url()?>assets/img/slidekedua.png" class="d-block w-100" alt="2">
					<div class="container">
						<div class="carousel-caption">
							<h1>Another example headline.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
								gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div>
					</div>
				</div>

				<div class="carousel-item">
					<img src="<?= base_url()?>assets/img/slideketiga.png" class="d-block w-100" alt="3">
					<div class="container">
						<div class="carousel-caption">
							<h1>Another example headline.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
								gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>

		<hr class="featurette-divider" style="margin-top: 5em">



		<!-- Marketing messaging and featurettes
  ================================================== -->
		<!-- Wrap the rest of the page in another container to center all the content. -->


		<div class="album py-5 bg-light" style="margin-top: 5em">
			<div class="container">

				<div class="row">
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
								focusable="false" role="img" aria-label="Placeholder: Thumbnail">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
									dy=".3em">Thumbnail</text>
							</svg>
							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
								focusable="false" role="img" aria-label="Placeholder: Thumbnail">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
									dy=".3em">Thumbnail</text>
							</svg>
							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<svg class="bd-placeholder-img card-img-top" width="100%" height="225"
								xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
								focusable="false" role="img" aria-label="Placeholder: Thumbnail">
								<title>Placeholder</title>
								<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
									dy=".3em">Thumbnail</text>
							</svg>
							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural
									lead-in to additional content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
									<small class="text-muted">9 mins</small>
								</div>
							</div>
						</div>
					</div>
					<div class="justify-content-center" style="margin-left: 46%">
						<p><a class="btn btn-primary" href="#" role="button">View more &raquo;</a></p>
					</div>
				</div>
			</div>


			<!-- START THE FEATURETTES -->

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7">
					<h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll
							blow your
							mind.</span></h2>
					<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula
						porta felis
						euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur.
						Fusce dapibus,
						tellus ac cursus commodo.</p>
				</div>
				<div class="col-md-5">
					<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
						height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
						focusable="false" role="img" aria-label="Placeholder: 500x500">
						<title>Placeholder</title>
						<rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
							dy=".3em">500x500</text>
					</svg>
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7 order-md-2">
					<h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for
							yourself.</span></h2>
					<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula
						porta felis
						euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur.
						Fusce dapibus,
						tellus ac cursus commodo.</p>
				</div>
				<div class="col-md-5 order-md-1">
					<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
						height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
						focusable="false" role="img" aria-label="Placeholder: 500x500">
						<title>Placeholder</title>
						<rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
							dy=".3em">500x500</text>
					</svg>
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7">
					<h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span>
					</h2>
					<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula
						porta felis
						euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur.
						Fusce dapibus,
						tellus ac cursus commodo.</p>
				</div>
				<div class="col-md-5">
					<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
						height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
						focusable="false" role="img" aria-label="Placeholder: 500x500">
						<title>Placeholder</title>
						<rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
							dy=".3em">500x500</text>
					</svg>
				</div>
			</div>

			<hr class="featurette-divider">

			<!-- /END THE FEATURETTES -->

		</div><!-- /.container -->


		<!-- FOOTER -->
		<footer class="container">
			<p>KSR PMI Unit Institut Teknologi Sumatera</p>
			<p class="float-right" style="margin-top: 2em"><a href="#">Back to top</a></p>
			<p style="margin-top: 2em">&copy; 2020 Development by 14117029.</p>
		</footer>
	</main>
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
