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
							<li><a href="/indexBerita">Berita</a></li>
							<li class="active"><a href="/adminupdatestatus">Update Status Gunung</a></li>
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
										<a href="#">Update Status Gunung<br /></a>
										<button><a href="/tambahDaftarGunung" type="button" class="btn btn-primary">Tambah Daftar Gunung</a></button>
									</h3>
								</header>

								<!-- <h2>Table</h2> -->

									<!-- <h3>Default</h3> -->
									<form action="/updateStatusGunung" method="POST">
									@csrf
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Nama Gunung</th>
													<th>Status Gunung</th>                                                  
												</tr>
											</thead>
											<tbody>
												@foreach($data as $d)
												<tr>
													<td>{{$d->nama_gunung}}</td>
													<td>
														@if($d->status == 0)
														<div class="form-check">
														<input class="form-check-input" type="radio" value='{"id":"{{ $d->id_gunung }}", "status":"1"}' name="status[{{$d->id_gunung}}]" id="status1{{$d->id_gunung}}">
														<label class="form-check-label" for="status1{{$d->id_gunung}}">
															Boleh didaki
														</label>
														</div>
														<div class="form-check">
														<input class="form-check-input" type="radio" value='{"id":"{{ $d->id_gunung }}", "status":"0"}' name="status[{{$d->id_gunung}}]" id="status2{{$d->id_gunung}}" checked>
														<label class="form-check-label" for="status2{{$d->id_gunung}}">
															Tidak boleh didaki
														</label>
														</div>
														@else
														<div class="form-check">
														<input class="form-check-input" type="radio" value='{"id":"{{ $d->id_gunung }}", "status":"1"}' name="status[{{$d->id_gunung}}]" id="status1{{$d->id_gunung}}" checked>
														<label class="form-check-label" for="status1{{$d->id_gunung}}">
															Boleh didaki
														</label>
														</div>
														<div class="form-check">
														<input class="form-check-input" type="radio" value='{"id":"{{ $d->id_gunung }}", "status":"0"}' name="status[{{$d->id_gunung}}]" id="status2{{$d->id_gunung}}">
														<label class="form-check-label" for="status2{{$d->id_gunung}}">
															Tidak boleh didaki
														</label>
														</div>
														@endif
													</td>                                                   
												</tr>
												@endforeach
											</tbody>
											<!-- <tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot> -->
										</table>
									</div>
									<div>
									<header class="major">
										<button class="btn btn-primary" type="submit">Update</button>
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