<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<title>ADMIN | RESERVASI PC</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="{{ asset('theme2/assets/css/main.css') }}" rel="stylesheet">
        <noscript><link href="{{ asset('theme2/assets/css/noscript.css') }}" rel="stylesheet" /></noscript>
		
	</head>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<body class="is-preload">
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
                            <li><button class="button large primary disabled"><i class="fas fa-user fa-fw"></i> ADMIN LAB</button></li>
                            <br>
							<li><a href="#intro">DAFTAR RESERVASI PC</a></li>
                            <li><a href="#one"> DAFTAR PC </a></li>
                            <br><br><br>
							<li><a href="#" class="button">LOGOUT</a></li>

						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->

					<section id="intro" class="wrapper style1 fullscreen fade-up">
                        
						<div class="inner">
							<h2 style="justify-content: space-between;"> DAFTAR RESERVASI PC</h2>
                            <br>
							<!-- <form method="post" action="#">
                                    <div class="row gtr-uniform" style="justify-content: center;">
                                        <div class="col-6 col-12-xsmall">
                                            <input type="text" name="nrp" id="nrp" value="" placeholder="Masukkan NRP" required />
                                        </div>
                                                
                                        <div>
                                            <ul class="actions">
                                                <li><input type="submit" value="Cek" class="primary" /></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form> -->

                                <div class="container">
                                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID Reservasi</th>
                                                    <th>ID PC</th>
                                                    <th>NRP</th>
                                                    <th>Nama</th>
                                                    <th>Tanggal Reservasi</th>
                                                    <th>Status</th>   
                                                </tr>
                                            </thead>
                                            <tbody style="color: white;">
                                                <tr >
                                                    <td>05</td>
                                                    <td>01</td>
                                                    <td>05116712357970</td>
                                                    <td>Beliana</td>
                                                    <td>09 - 04 - 2019</td>
                                                    <td class="clickable" data-toggle="collapse" id="row1" data-target=".row1"><button class="btn btn-primary btn-sm"><i class="fas fa-eye fa-fw"></i>LIHAT</button></td>
                                                </tr>
                                                <table class="table-responsive-md collapse row1" style="justify-content: center;"> <!--buat nyambungin ke db ntar pake kode reservasi-->
                                                    <thead>
                                                        <tr class="bg-dark">
                                                            <th>Nama</th>
                                                            <th>NRP</th>
                                                            <th>Email</th>
                                                            <th>No.Telp</th>
                                                            <th colspan="2">Berkas</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="bg-white" style="color: black">
                                                            <td>Beliana</td>
                                                            <td>051399743749</td>   
                                                            <td>beliana@gmail.com</td>
                                                            <td>0988673683486</td>
                                                            <td><button class="btn btn-primary btn-sm"><i class="fas fa-eye fa-fw"></i>Lihat</button></td>
                                                            <td><button class="btn btn-primary btn-sm"><i class="fas fa-download fa-fw"></i>Unduh</button></td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="4"></td>
                                                            <td ><button class="btn btn-success btn-sm">Setujui</button></td>
                                                            <td ><button class="btn btn-danger btn-sm">Batalkan</button></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                
                                            </tbody>

                                        </table>
                                </div>
						</div>

                        <script type="text/javascript">
                        $(document).ready(function() {
                            $('#example').DataTable(
                                
                                 {     

                              "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                                "iDisplayLength": 5
                               } 
                                );
                        } );


                        function checkAll(bx) {
                          var cbs = document.getElementsByTagName('input');
                          for(var i=0; i < cbs.length; i++) {
                            if(cbs[i].type == 'checkbox') {
                              cbs[i].checked = bx.checked;
                            }
                          }
                        }
                        </script>
                        
					</section>

				<!-- One -->
					<section id="one" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>DAFTAR PC</h2>
                            <br>

							    <div class="table-wrapper">
                                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID PC</th>
                                                    <th>Lab</th>
                                                    <th>Status</th>
                                                    <th colspan="2" >CRUD</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Item One</td>
                                                    <td>Ante turpis integer aliquet porttitor.</td>
                                                    <td>Dipinjam</td>
                                                    <td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editPC"><i class="fas fa-edit fa-fw"></i>Edit</button></td>
                                                    <td><button class="btn btn-danger btn-sm"><i class="fas fa-trash fa-fw"></i>Delete</button></td>
                                                </tr>
                                                <tr>
                                                    <td>Item Two</td>
                                                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                                    <td>Dipinjam</td>
                                                    <td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editPC"><i class="fas fa-edit fa-fw"></i>Edit</button></td>
                                                    <td><button class="btn btn-danger btn-sm"><i class="fas fa-trash fa-fw"></i>Delete</button></td>
                                                </tr>
                                                <tr>
                                                    <td>Item One</td>
                                                    <td>Ante turpis integer aliquet porttitor.</td>
                                                    <td>Dipinjam</td>
                                                    <td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editPC"><i class="fas fa-edit fa-fw"></i>Edit</button></td>
                                                    <td><button class="btn btn-danger btn-sm"><i class="fas fa-trash fa-fw"></i>Delete</button></td>
                                                </tr>
                                                <tr>
                                                    <td>Item Two</td>
                                                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                                    <td>Dipinjam</td>
                                                    <td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editPC"><i class="fas fa-edit fa-fw"></i>Edit</button></td>
                                                    <td><button class="btn btn-danger btn-sm"><i class="fas fa-trash fa-fw"></i>Delete</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                </div>
                                
						</div>

                        <script type="text/javascript">
                        $(document).ready(function() {
                            $('#example').DataTable(
                                
                                 {     

                              "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                                "iDisplayLength": 5
                               } 
                                );
                        } );


                        function checkAll(bx) {
                          var cbs = document.getElementsByTagName('input');
                          for(var i=0; i < cbs.length; i++) {
                            if(cbs[i].type == 'checkbox') {
                              cbs[i].checked = bx.checked;
                            }
                          }
                        }
                        </script>

                        <!-- Modal -->
                        <div class="modal fade" id="editPC" tabindex="-1" role="dialog" aria-labelledby="editPC" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content" style="background-color: #b74e91;" >
                              <div class="modal-header">
                                <h2 class="modal-title" id="editPC">Edit PC</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body" >
                                <form method="" action="">
                                    <div class="row gtr-uniform" style="justify-content: center;">
                                        <div class="col-11">
                                            <label for="idPC">ID PC</label>
                                            <input type="text" name="idPC" id="idPC" value="" placeholder="ID PC" />
                                        </div>
                                        <div class="col-11">
                                            <select name="lab" id="lab">
                                                <option value="">- Lab -</option>
                                                <option value="1">Manufacturing</option>
                                                <option value="1">Shipping</option>
                                                <option value="1">Administration</option>
                                                <option value="1">Human Resources</option>
                                            </select>
                                        </div>
                                        <div class="col-11">
                                            <label for="status">Status</label>
                                            <input type="text" name="status" id="status" value="" placeholder="Status" />
                                        </div>
                                    </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-sm">Update</button>
                              </div>
                            </div>
                          </div>
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
            <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

			<script src="{{ asset('theme2/assets/js/jquery.min.js') }}" defer></script>
            <script src="{{ asset('theme2/assets/js/jquery.scrollex.min.js') }}" defer></script>
            <script src="{{ asset('theme2/assets/js/jquery.scrolly.min.js') }}" defer></script>
            <script src="{{ asset('theme2/assets/js/browser.min.js') }}" defer></script>
            <script src="{{ asset('theme2/assets/js/breakpoints.min.js') }}" defer></script>
            <script src="{{ asset('theme2/assets/js/util.js') }}" defer></script>
            <script src="{{ asset('theme2/assets/js/main.js') }}" defer></script>

	</body>
</html>