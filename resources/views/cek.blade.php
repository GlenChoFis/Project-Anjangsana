<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Anjangsana</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="{{URL::to('/')}}/assets/css/noscript.css" /></noscript>
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
                            <li class="active"><a href="/admin">Verifikasi Perizinan</a></li>
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

								<!-- Form -->
								<t>Verifikasi data-data berikut : 
								</br>	
								</t>
								<form action="/update-status" method="POST">
									@csrf
									<input type="hidden" name="id_perizinan" value="{{$data[0]->id_perizinan}}">
									<div class="form-group">
										<label for="nama">Nama</label>
										<input type="text" id="nama" class="form-control" placeholder="{{$data[0]->nama}}" disabled>  
                                        <div class="form-check">
											@if($data[0]->status_nama == 0)                               
											<input class="form-check-input" type="hidden" name="ceknama" value="{{$data[0]->status_nama}}" >
											<input class="form-check-input" type="checkbox" id="ceknama" name="ceknama" value="1">
											<label class="form-check-label" for="ceknama">Verifikasi</label>
										</div>
											@else
										<div class="form-check">
											<input class="form-check-input" type="hidden" name="ceknama" value="{{$data[0]->status_nama}}" >
											<input class="form-check-input" type="checkbox" id="ceknama" name="ceknama" value="0" checked disabled>
											<label class="form-check-label" for="ceknama">Verifikasi</label>
										</div>
										@endif
									</div>
									</br>
									<div class="form-group">
										<label for="tanggalLahir">Tanggal Lahir</label>
										<input type="text" id="tanggalLahir" class="form-control" placeholder="{{$data[0]->tanggal_lahir}}" disabled>
										<div class="form-check">
											@if($data[0]->status_tgl_lahir == 0)
											<input class="form-check-input" type="hidden" name="ceklahir" value="{{$data[0]->status_tgl_lahir}}">
											<input class="form-check-input" type="checkbox" id="ceklahir" name="ceklahir" value="1">
											<label class="form-check-label" for="ceklahir">Verifikasi</label>
										</div>
											@else
										<div class="form-check">
											<input class="form-check-input" type="hidden" name="ceklahir" value="{{$data[0]->status_tgl_lahir}}">
											<input class="form-check-input" type="checkbox" id="ceklahir" name="ceklahir" value="0" checked disabled>
											<label class="form-check-label" for="ceklahir">Verifikasi</label>
										</div>
										@endif
									</div>
									</br>
									<div class="form-group">
										<label for="alamat">Alamat Tinggal</label>
										<input type="text" id="alamat" class="form-control" placeholder="{{$data[0]->alamat_tinggal}}" disabled>
										<div class="form-check">
											@if($data[0]->status_alamat == 0)
											<input class="form-check-input" type="hidden" name="cekalamat" value="{{$data[0]->status_alamat}}">
											<input class="form-check-input" type="checkbox" id="cekalamat" name="cekalamat" value="1">
											<label class="form-check-label" for="cekalamat">Verifikasi</label>
										</div>
											@else
										<div class="form-check">
											<input class="form-check-input" type="hidden" name="cekalamat" value="{{$data[0]->status_alamat}}">
											<input class="form-check-input" type="checkbox" id="cekalamat" name="cekalamat" value="0" checked disabled>
											<label class="form-check-label" for="cekalamat">Verifikasi</label>
										</div>
										@endif
									</div>
									</br>
									<div class="form-group">
										<label for="alamat">Nomor Telepon</label>
										<input type="text" id="telp" class="form-control" placeholder="{{$data[0]->nomor_telepon}}" disabled>
										@if($data[0]->status_notelp == 0)
										<div class="form-check">
											<input class="form-check-input" type="hidden" name="ceknotelp" value="{{$data[0]->status_notelp}}">
											<input class="form-check-input" type="checkbox" id="ceknotelp" name="ceknotelp" value="1">
											<label class="form-check-label" for="ceknotelp">Verifikasi</label>
										</div>
											@else
										<div class="form-check">
											<input class="form-check-input" type="hidden" name="ceknotelp" value="{{$data[0]->status_notelp}}">
											<input class="form-check-input" type="checkbox" id="ceknotelp" name="ceknotelp" value="0" checked disabled>
											<label class="form-check-label" for="ceknotelp">Verifikasi</label>
										</div>
										@endif
									</div>
									</br>
									<div class="form-group">
										<label for="alamat">Nomor Telepon Keluarga</label>
										<input type="text" id="telpkel" class="form-control" placeholder="{{$data[0]->nomor_telepon_keluarga}}" disabled>
										@if($data[0]->status_notelpkel == 0)
										<div class="form-check">
											<input class="form-check-input" type="hidden" name="ceknotelpkel" value="{{$data[0]->status_notelpkel}}">
											<input class="form-check-input" type="checkbox" id="ceknotelpkel" name="ceknotelpkel" value="1">
											<label class="form-check-label" for="ceknotelpkel">Verifikasi</label>
										</div>
											@else
										<div class="form-check">
											<input class="form-check-input" type="hidden" name="ceknotelpkel" value="{{$data[0]->status_notelpkel}}">
											<input class="form-check-input" type="checkbox" id="ceknotelpkel" name="ceknotelpkel" value="0" checked disabled>
											<label class="form-check-label" for="ceknotelpkel">Verifikasi</label>
										</div>
										@endif
									</div>
									</br>
									<div class="form-group">
										<label for="exampleDataList" class="form-label">gunung yang ingin didaki</label>
										<input type="text" class="form-control" placeholder="{{$data[0]->nama_gunung}}" disabled>
										@if($data[0]->status_gunung == 0)
										<div class="form-check">
											<input class="form-check-input" type="hidden" name="cekgunung" value="{{$data[0]->status_gunung}}">
											<input class="form-check-input" type="checkbox" id="cekgunung" name="cekgunung" value="1">
											<label class="form-check-label" for="cekgunung">Verifikasi</label>
										</div>
											@else
										<div class="form-check">
											<input class="form-check-input" type="hidden" name="cekgunung" value="{{$data[0]->status_gunung}}">
											<input class="form-check-input" type="checkbox" id="cekgunung" name="cekgunung" value="1" checked disabled>
											<label class="form-check-label" for="cekgunung">Verifikasi</label>
										</div>
										@endif
									</div>
									</br>

									<div class="form-group">
										<label for="contohupload1">Foto KTP</label>
										<button><a target="blank" href="/storage/{{$data[0]->image_ktp}}" type="button">Lihat</a></button>
										<!-- <input type="file" class="form-control-file" id="contohupload1" disabled> -->
										@if($data[0]->status_ktp == 0)
										<div class="form-check">
											<input class="form-check-input" type="hidden" name="cekktp" value="{{$data[0]->status_ktp}}">
											<input class="form-check-input" type="checkbox" id="cekktp" name="cekktp" value="1">
											<label class="form-check-label" for="cekktp">Verifikasi</label>
										</div>
											@else
										<div class="form-check">
											<input class="form-check-input" type="hidden" name="cekktp" value="{{$data[0]->status_ktp}}">
											<input class="form-check-input" type="checkbox" id="cekktp" name="cekktp" value="0" checked disabled>
											<label class="form-check-label" for="cekktp">Verifikasi</label>
										</div>
										@endif
									</div>
									
									<br/>

									<div class="form-group">
										<label for="contohupload1">Foto Surat Keterangan Sehat</label>
										<button><a target="blank" href="/storage/{{$data[0]->image_sks}}" type="button">Lihat</a></button>
										<!-- <input type="file" class="form-control-file" id="contohupload2" disabled> -->
										@if($data[0]->status_sks == 0)
										<div class="form-check">
											<input class="form-check-input" type="hidden" name="ceksks" value="{{$data[0]->status_sks}}">
											<input class="form-check-input" type="checkbox" id="ceksks" name="ceksks" value="1">
											<label class="form-check-label" for="ceksks">Verifikasi</label>
										</div>
											@else
										<div class="form-check">
											<input class="form-check-input" type="hidden" name="ceksks" value="{{$data[0]->status_sks}}">
											<input class="form-check-input" type="checkbox" id="ceksks" name="ceksks" value="0" checked disabled>
											<label class="form-check-label" for="ceksks">Verifikasi</label>
										</div>
										@endif
									</div>
									
									<br/>

									<div>
									<header class="major">
									<button type="submit" class="btn btn-primary">Simpan</button>
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
			<script src="{{URL::to('/')}}/assets/js/jquery.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/jquery.scrollex.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/jquery.scrolly.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/browser.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/breakpoints.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/util.js"></script>
			<script src="{{URL::to('/')}}/assets/js/main.js"></script>
	</body>
</html>