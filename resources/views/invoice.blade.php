<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Invoice</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/main.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<noscript><link rel="stylesheet" href="{{URL::to('/')}}/assets/css/noscript.css" /></noscript>

		<style>
			.button:hover{
				color: white;
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
							<li><a href="/menuutama">Menu Utama</a></li>
							<li><a href="/berita">Berita</a></li>
							<li><a href="/perizinan">Perizinan</a></li>
							<li class="active"><a href="/status">Status Perizinan</a></li>
                            <li><a href="/histori">Histori Pendakian</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="/profil" class=""><span class="label">Profile</span></a></li>
							<li><a href="/logout" class=""><span class="label">Logout</span></a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
                                <header class="major">
									<h3>Invoice {{Auth::user()->name}} <br> pendakian {{$data[0]->nama_gunung}}
									</h3>
								</header>
                                

								<!-- <h2>Table</h2> -->

									<!-- <h3>Default</h3> -->
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Tanggal Pendakian</th>
													<th>Tanggal Turun</th>
													<th>Total Harga</th>
												</tr>
											</thead>
											<tbody>
												@foreach($data as $d)
												<tr>
                                                    <td>{{$d->tanggal_pendakian}}</td>
													<td>{{$d->tanggal_turun}}</td>
                                                    <td>{{$d->total_harga}}</td>
                                                    
												</tr>
												@endforeach
											</tbody>
												<!-- <tr>
													<td>Lawu</td>
													<td>22 Desember 2018</td>
													<td>
                                                        <span>☐</span>
                                                    </td>
												</tr> -->
											<!-- <tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot> -->
										</table>
                                        <p>*Silahkan screenshot halaman ini untuk bukti di pos pendakian.</p>
									</div>

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
						<ul><li>Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="{{URL::to('/')}}/assets/js/jquery.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/jquery.scrollex.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/jquery.scrolly.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/browser.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/breakpoints.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/util.js"></script>
			<script src="{{URL::to('/')}}/assets/js/main.js"></script>

	</body>
</html>