<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Menu Utama</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>Anjangsana<br />
						Permits</h1>
						<p>A mountaineering permit throughout the Indonesian archipelago.</a><br />
						<!-- and MERDEKA!!!</a>.</p> -->
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="https://www.google.co.id/maps/place/Warkop+Anjangsana/@-7.2763545,112.7550919,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd7fbc9fa3e3959:0xd01b3aa3713483f5!8m2!3d-7.2763584!4d112.7572721" class="logo">Anjangsana </a>
					</header>

				<!-- Nav -->
				<!-- <form action="/logout" method="post">
					@csrf -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="/menuutama">Menu Utama</a></li>
							<li><a href="/berita">Berita</a></li>
							<li><a href="/perizinan">Perizinan</a></li>
							<li><a href="/status">Status Perizinan</a></li>
							<li><a href="/histori">Histori Pendakian</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/glen.choirulfais" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/anjangsanapermits/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="/profil" class=""><span class="label">Profile</span></a></li>
							<li><a href="/logout" class=""><span class="label">Logout</span></a></li>
						</ul>
					</nav>
				<!-- </form> -->

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date">Tuhan Maha Penolong</span>
									<h2><a href="#">Gunung<br />
									</a></h2>
									<p>Gunung adalah bagian kerak bumi yang lebih tinggi dari area di sekitarnya.<br />
									Gunung biasanya memiliki sisi curam yang secara signifikan menyingkap batuan dasarnya<br />
									Sebuah gunung biasanya lebih tinggi dan curam dari sebuah bukit, tetapi ada kesamaan,<br /> 
									dan penggunaan gunung sering tergantung dari adat lokal.<br />
									<br />
                                    Dengan adanya gunung yang merupakan ciptaan Tuhan Yang Maha Esa<br />
									yang sangat indah, kita harus menjaga dan melestarikannya.</p>
								</header>
								<a href="https://i.pinimg.com/originals/8b/f2/39/8bf239d72b8f4739a5880ba8a1aa249e.jpg" class="image main"><img src="https://i.pinimg.com/originals/8b/f2/39/8bf239d72b8f4739a5880ba8a1aa249e.jpg" alt="" /></a>
								<!-- <ul class="actions special">
									<li><a href="#" class="button large">Full Story</a></li>
								</ul> -->
							</article>

						<!-- Posts -->
							<section class="posts">
								@foreach($data as $d)
								<article>
									<header>
										<!-- <span class="date">April 24, 2017</span> -->
										<h2><a href="#">{{$d->nama_gunung}}</a></h2>
									</header>
									<a href="https://images.alphacoders.com/581/581184.jpg" class="image fit"><img src="storage/{{$d->image_gunung}}" alt="" /></a>
									<p>{{$d->deskripsi}}</p>
									<ul class="actions special">
										<li><a href="{{$d->link}}" target="_blank"class="button">Full Story</a></li>
									</ul>
								</article>
								@endforeach
							</section>

						<!-- Footer -->
							<!-- <footer>
								<div class="pagination">
									<a href="#" class="previous">Prev</a>
									<a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a>
								</div>
							</footer> -->

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="#">
								<!-- <div class="fields">
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
								</div> -->
								<!-- <ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul> -->
							</form>
						</section>
						<section class="split contact">
							<section class="alt">
								<!-- <h3>Address</h3>
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
							</section>
							<section> -->
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/anjangsanapermits" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; copyright</li><li>Design By: <a href="https://html5up.net">anjangsana</a></li></ul>
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