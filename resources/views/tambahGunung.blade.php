<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Perizinan</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

        <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }

        </style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo">Anjangsana</a>
					</header>

				<!-- Nav -->
                    <nav id="nav">
						<ul class="links">
                            <li><a href="/admin">Verifikasi Perizinan</a></li>
							<li><a href="/adminupdateberita">Update Berita</a></li>
							<li class="active"><a href="/adminupdatestatus">Update Status Gunung</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="major">
									<h2><a href="#">Tambah Daftar Gunung<br />
									</a></h2>
								</header>

								<form method="post" action="/tambahgunung" enctype="multipart/form-data">
									@csrf
									<div class="form-group">
										<label for="nama_gunung">Nama gunung</label>
										<input type="text" name="nama_gunung" id="nama_gunung" class="form-control">
									</div>
									</br>
									<div class="form-group">
										<label for="harga">Harga per hari</label>
										<input type="number" name="harga" id="harga" class="form-control" >
									</div>
									</br>

									<div class="table-wrapper" style="margin-bottom:10px">
										<div class="form-outline">
											<label class="form-label" for="textAreaExample2" style="font-size: 15px">Deskripsi berita</label>
											<textarea class="form-control" name="deskripsi" id="textAreaExample2" rows="2"></textarea>
										</div>	
									</div>
									<br>
									<div class="form-group">
										<label for="link">Link</label>
										<input type="text" name="link" id="link" class="form-control">
									</div>
									</br>

									<div class="form-group">
										<label for="image_gunung">Foto gunung</label>
										<input type="file" class="form-control-file" id="image_gunung" name="image_gunung">
									</div>
									<br/>

									<div>
									<header class="major">
									<button type="submit" class="btn btn-primary">Tambah</button>
									</header>
									</div>
								</form>
								<t>
								*Persyaratan pendakian ini hanya untuk perorangan
								</t>
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
