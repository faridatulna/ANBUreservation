<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title>RESERVASI PC</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="{{ asset('theme2/assets/css/main.css') }}" rel="stylesheet">
        <noscript><link href="{{ asset('theme2/assets/css/noscript.css') }}" rel="stylesheet" /></noscript>
		

	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">CEK RESERVASI PC</a></li>
                            <li><a href="#one">DAFTAR</a></li>
							<!-- <li><a href="#two">What we do</a></li>
							<li><a href="#three">Get in touch</a></li> -->
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->

					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h2> CEK RESERVASI PC</h2>
                            <br>
                            
							<form method="post" action="#">
                                    <div class="row gtr-uniform" style="justify-content: center;">
                                        <div class="col-6 col-12-xsmall">
                                            <input type="text" name="nrp" id="nrp" value="" placeholder="Masukkan NRP" required />
                                        </div>
                                                
                                        <div>
                                            <ul class="actions">
                                                <li><button class="button primary"><i class="fas fa-search fa-fw"></i> Cek </button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>

                                <div class="table-wrapper">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>NRP</th>
                                                        <th>LAB</th>
                                                        <th>Nomor PC</th>
                                                        <th>Tanggal Reservasi</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="color: white;">
                                                    <tr class="bg-warning">
                                                        <td>05116712357970</td>
                                                        <td>KCV</td>
                                                        <td>PC001</td>
                                                        <td>09 - 04 - 2019</td>
                                                        <td>Belum Disetujui</td>
                                                    </tr>
                                                    <tr class="bg-success">
                                                        <td>05116712357970</td>
                                                        <td>RPL</td>
                                                        <td>PC001</td>
                                                        <td>09 - 04 - 2019</td>
                                                        <td>Disetujui</td>
                                                    </tr>
                                                </tbody>
                                                <!-- <tfoot>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td>100.00</td>
                                                    </tr>
                                                </tfoot> -->
                                            </table>
                                </div>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>DAFTAR</h2>
                            <br>

							<form method="post" action="#">
                                        <div class="row gtr-uniform" style="justify-content: center;">
                                            <div class="col-6 ">
                                            	<label for="nama">Nama</label>
                                                <input type="text" name="nama" id="nama" value="" placeholder="Nama" required />
                                            </div>
                                            <div class="col-6">
                                            	<label for="nrp">NRP</label>
                                                <input type="text" name="nrp" id="nrp" value="" placeholder="NRP" required />
                                            </div>
                                            <div class="col-6">
                                            	<label for="notelp">No.TELP</label>
                                                <input type="text" name="notelp" id="notelp" value="" placeholder="No.TELP" required/>
                                            </div>
                                            <div class="col-6">
                                            	<label for="email">Email</label>
                                                <input type="email" name="email" id="email" value="" placeholder="Email" required />
                                            </div>
                                            <div class="col-6">
                                                <select name="labs" id="labs">
                                                    <option value="">- Nama LAB -</option>
                                                    <option value="1">RPL</option>
                                                    <option value="1">KCV</option>
                                                    <option value="1">NCC</option>
                                                    <option value="1">LP</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <select name="PCs" id="PCs">
                                                    <option value="">- Kode PC -</option>
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                </select>
                                            </div>

                                            <div class="col-7">
                                                <label class="button icon fa-upload" for="my-file-selector">
                                                <input id="my-file-selector" type="file" style="display:none" 
                                                onchange="$('#upload-file-info').html(this.files[0].name)">
                                                Unggah Berkas
                                                </label>
                                                <span class='label label-info' id="upload-file-info"></span>

                                            </div>
                                            
                                                    
                                            <div class="col-6">
                                                <ul class="actions">
                                                    <li><input type="submit" value="Submit" class="primary" /></li>
                                                    <li><input type="reset" value="Reset" /></li>
                                                </ul>
                                          </div>
                                    </div>
                                </form>

						</div>
					</section>

			</div>

		<!-- Footer -->
			<!-- <footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<p class="copyright">&copy; ANBUSTEAM.</p>
					</ul>
				</div>
			</footer> -->

		<!-- Scripts -->
            

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

			<script src="{{ asset('theme2/assets/js/jquery.min.js') }}" defer></script>
            <script src="{{ asset('theme2/assets/js/jquery.scrollex.min.js') }}" defer></script>
            <script src="{{ asset('theme2/assets/js/jquery.scrolly.min.js') }}" defer></script>
            <script src="{{ asset('theme2/assets/js/browser.min.js') }}" defer></script>
            <script src="{{ asset('theme2/assets/js/breakpoints.min.js') }}" defer></script>
            <script src="{{ asset('theme2/assets/js/util.js') }}" defer></script>
            <script src="{{ asset('theme2/assets/js/main.js') }}" defer></script>

	</body>
</html>