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
										<a href="#">Update Berita Berita<br /></a>
									</h3>
								</header>

									<!-- <h3>Default</h3> -->
									<form method="post" action="/updateBerita" enctype="multipart/form-data">
									@csrf
                                    <input type="hidden" value="{{$data[0]->id_berita}}" name="id_berita">
									<div class="form-group">
										<label for="judul">Judul Berita</label>
										<input type="text" name="judul_berita" id="judul" class="form-control" value="{{$data[0]->judul}}">
									</div>
									</br>

									<div class="table-wrapper" style="margin-bottom:10px">
                                        <div class="form-outline">
                                            <label class="form-label" for="textAreaExample" style="font-size: 15px">isi berita</label>
                                            <input type="text" class="form-control" name="isi" value="{{$data[0]->isi}}" id="textAreaExample">
                                        </div>	
                                    </div>
									</br>

                                    <div class="form-group">
										<label for="caption">Caption</label>
										<input type="text" name="caption" id="caption" class="form-control" value="{{$data[0]->caption}}">
									</div>
									</br>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-select" aria-label="Default select example" name="status_berita">
                                            @if($data[0]->status_berita == 1)
                                            <option selected value="1">Aktif</option>
                                            <option value="0">nonAktif</option>
                                            @else
                                            <option selected value="0">nonAktif</option>
                                            <option value="1">Aktif</option>
                                            @endif
                                        </select>
                                    </div><br>

									<div class="form-group">
										<label for="image_berita">Foto Berita</label>
                                        <input class="form-control" id="image_berita" type="hidden" value="{{$data[0]->image_berita}}" name="image_berita">
										<input type="file" class="form-control-file" id="image_berita" name="image_berita">
									</div>

									<br/>

									<div>
									<header class="major">
									<button type="submit" class="btn btn-primary">Save</button>
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
			<script src="{{URL::to('/')}}/assets/js/jquery.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/jquery.scrollex.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/jquery.scrolly.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/browser.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/breakpoints.min.js"></script>
			<script src="{{URL::to('/')}}/assets/js/util.js"></script>
			<script src="{{URL::to('/')}}/assets/js/main.js"></script>

	</body>
</html>