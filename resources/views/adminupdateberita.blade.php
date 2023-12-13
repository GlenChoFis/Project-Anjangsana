<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Anjangsana</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo">Admin Anjangsana</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
                            <li><a href="/admin">Verifikasi Perizinan</a></li>
							<li class="active"><a href="/indexBerita">Berita</a></li>
							<li><a href="/adminupdatestatus">Update Status Gunung</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="/logout" class=""><span class="label">Logout</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="major">
									<h3>
										<a href="#">Update Berita<br /></a>
									</h3>
								</header>

									<!-- <h3>Default</h3> -->
									<form action="/update-berita" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="table-wrapper" style="margin-bottom:10px">
											<div class="form-outline">
												<label class="form-label" for="judul" style="font-size: 15px">judul berita</label>
												<input type="text" name="judul" id="judul" class="form-control">
											</div>	
										</div>
	
										<div class="table-wrapper" style="margin-bottom:10px">
											<div class="form-outline">
												<label class="form-label" for="textAreaExample" style="font-size: 15px">isi berita</label>
												<textarea class="form-control" name="isi" id="textAreaExample" rows="4"></textarea>
											</div>	
										</div>
										
										<div class="table-wrapper" style="margin-bottom:10px">
											<div class="form-outline">
												<label class="form-label" for="textAreaExample2" style="font-size: 15px">Caption</label>
												<textarea class="form-control" name="caption" id="textAreaExample2" rows="2"></textarea>
											</div>	
										</div>
	
										<div class="table-wrapper" style="margin-bottom:10px">
											<div class="form-outline">
												<label for="foto_berita">foto berita</label>
												<input type="file" class="form-control-file" id="foto_berita" name="foto_berita">
											</div>
										</div>
	
										</br>
	
										<div>
										<header class="major">
										<button type="update" class="btn btn-primary">Update</button>
										</header>
										</div>
									</form>

							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<!-- <form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form> -->
						</section>
						<section class="split contact">
							<!-- <section class="alt">
								<h3>Address</h3>
								<p>1234 Somewhere Road #87257<br />
								Nashville, TN 00000-0000</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(000) 000-0000</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">info@untitled.tld</a></p>
							</section> -->
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>