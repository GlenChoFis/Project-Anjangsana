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
							<li class="active"><a href="/perizinan">Perizinan</a></li>
							<li><a href="/status">Status Perizinan</a></li>
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
								<!-- <header class="major">
									<h1>PERIZINAN</h1>
								</header> -->

								<!-- Blockquote -->
								<header class="major">
									<h2><a href="#">Perizinan<br />
									</a></h2>
								</header>

								<!-- Buttons -->
									<!-- <h2>Buttons</h2>
									<ul class="actions">
										<li><a href="#" class="button primary">Primary</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary large">Large</a></li>
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
									<ul class="actions fit">
										<li><a href="#" class="button primary fit">Fit</a></li>
										<li><a href="#" class="button fit">Fit</a></li>
									</ul>
									<ul class="actions fit small">
										<li><a href="#" class="button primary fit small">Fit + Small</a></li>
										<li><a href="#" class="button fit small">Fit + Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button primary icon solid fa-search">Icon</a></li>
										<li><a href="#" class="button icon solid fa-download">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button primary disabled">Primary</span></li>
										<li><span class="button disabled">Default</span></li>
									</ul>

									<hr /> -->

								<!-- Form -->
								<t>Silahkan isi data-data berikut sebagai persyaratan pendakian :
								</br>
								</t>
								<form method="post" action="/createizin" enctype="multipart/form-data">
									@csrf
									<div class="form-group">
										<label for="nama">Nama</label>
										<input type="text" name="nama_lengkap" id="nama" class="form-control" value="{{Auth::user()->name}}" placeholder="Masukkan Nama">
									</div>
									</br>
									<div class="form-group">
										<label for="tanggallahir">Tanggal Lahir</label>
										<input type="date" name="tgl_lahir" id="tanggallahir" class="form-control" required>
									</div>
									</br>
									<div class="form-group">
										<label for="alamat">Alamat Tinggal</label>
										<input type="text" name="alamat" id="umur" class="form-control" value="{{Auth::user()->alamat}}" placeholder=" Masukkan Alamat Tinggal">
									</div>
									</br>
									<div class="form-group">
										<label for="notelp">Nomor Telepon</label>
										<input type="text" name="notelp" id="notelp" class="form-control" value="{{Auth::user()->notelp}}" placeholder=" Masukkan Nomor">
									</div>
									</br>
									<div class="form-group">
										<label for="notelp_keluarga">Nomor Telepon Keluarga</label>
										<input type="text" name="notelp_keluarga" id="notelp" class="form-control" placeholder=" Masukkan Nomor" required>
									</div>
									</br>
									<!-- <div class="form-group">
										<label for="exampleDataList" class="form-label">Pilih gunung yang ingin didaki</label>
										<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder=" Ketik untuk mencari...">
											<datalist id="datalistOptions">
												{{-- @foreach ($gunungs as $gunung)
												<option value="{{ $gunung->id }}">{{ $gunung->nama_gunung }}</option>
												@endforeach --}}
												<option value="Bromo">
												<option value="Merbabu">
												<option value="Merapi">
												<option value="Lawu">
												<option value="Rinjani">
												<option value="Sumbing">
											</datalist>
									</div> -->
                                    <div class="form-group">
										<label for="namagunung">Nama Gunung yang ingin di daki</label>
										<select class="form-select" aria-label="Default select example" name="nama_gunung">
                                            <option selected disabled selected hidden>Nama Gunung yang ingin di daki</option>
                                            @foreach ($gunung as $g)
												<option value='{"id":"{{ $g->id_gunung }}", "harga":"{{ $g->harga }}"}'>{{ $g->nama_gunung }}</option>
											@endforeach
                                        </select>
									</div>

									</br>

									<div class="form-group">
										<label for="tanggalpendakian">Tanggal Pendakian</label>
										<input type="date" name="tgl" id="tanggalpendakian" class="form-control">
									</div>
									</br>

									<div class="form-group">
										<label for="tanggalturun">Tanggal Turun</label>
										<input type="date" name="tgl_turun" id="tanggalturun" class="form-control">
									</div>
									</br>

									<div class="form-group">
										<label for="image_ktp">Foto KTP</label>
										<input type="file" class="form-control-file" id="image_ktp" name="image_ktp">
									</div>

									<br/>

									<div class="form-group">
										<label for="image_sks">Foto Surat Keterangan Sehat</label>
										<input type="file" class="form-control-file" id="image_sks" name="image_sks">
									</div>

									<br/>

									<div>
									<header class="major">
									<button type="submit" class="btn btn-primary">Submit</button>
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
