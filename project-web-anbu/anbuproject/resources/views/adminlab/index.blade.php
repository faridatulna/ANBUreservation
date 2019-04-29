<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>ADMIN | RESERVASI PC</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="{{ asset('theme2/assets/css/main.css') }}" rel="stylesheet">
    <noscript>
        <link href="{{ asset('theme2/assets/css/noscript.css') }}" rel="stylesheet" />
    </noscript>

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
                    <li>
                        <button class="button large primary disabled"><i class="fas fa-user fa-fw"></i> ADMIN LAB</button>
                    </li>
                    <br>
                    <li><a href="#intro">DAFTAR RESERVASI PC</a></li>
                    <li><a href="#one"> DAFTAR PC </a></li>
                    <br>
                    <br>
                    <br>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="button">LOGOUT</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </li>

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
                <form action="{{ url()->current() }}">
                    <div class="row gtr-uniform" style="justify-content: center;">
                        <div class="col-6 col-12-xsmall">
                            <input type="text" name="keyword" id="keyword" value="" placeholder="Masukkan NRP" />
                        </div>

                        <div>
                            <ul class="actions">
                                <li><input type="submit" value="Cari" class="primary" /></li>
                             </ul>
                        </div>
                    </div>
                </form>

                <div class="table-wrapper">

                    <table>
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
                            @foreach($reservations as $reservation)
                            <tr>
                                <td>{{$reservation->id}}</td>
                                <td>{{$reservation->no_pc}}</td>
                                <td>{{$reservation->nrp}}</td>
                                <td>{{$reservation->nama}}</td>
                                <td>{{$reservation->tgl_pinjam}}</td>
                                <td class="clickable" data-toggle="collapse" id="row{{$reservation->id}}" data-target=".row{{$reservation->id}}">
                                    <button class="btn btn-primary btn-sm"><i class="fas fa-eye fa-fw"></i>LIHAT</button>
                                </td>
                            </tr>

                            <tr class="collapse row{{ $reservation->id}} bg-dark">
                                <th>Nama</th>
                                <th>NRP</th>
                                <th>Email</th>
                                <th>No.Telp</th>
                                <th colspan="2">Berkas</th>

                            </tr>
                            <tr class="bg-white collapse row{{ $reservation->id}}" style="color: black">
                                <td>{{$reservation->nama}}</td>
                                <td>{{$reservation->nrp}}</td>
                                <td>{{$reservation->email}}</td>
                                <td>{{$reservation->no_hp}}</td>
                                <td>
                                    <form action="" target="_blank">
                                        <button class="btn btn-primary btn-sm"><i class="fas fa-eye fa-fw"></i>Lihat</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('getDownload', $reservation->proposal) }}">
                                        <button class="btn btn-primary btn-sm"><i class="fas fa-download fa-fw"></i>Unduh</button>
                                    </form>
                                </td>
                            </tr>
                            <form method="POST" action="{{ route('adminlab.setuju', $reservation->id) }}">
                                @csrf
                                <tr class="bg-white collapse row{{ $reservation->id}}">
                                    <td colspan="4"></td>
                                    <td>
                                        <button class="btn btn-success btn-sm" name="status" value="2">Setujui</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" name="status" value="5">Batalkan</button>
                                    </td>
                                </tr>
                            </form>

                            @endforeach

                        </tbody>
                    </table>
                </div>
					@if ($reservations->hasPages())
						Halaman <strong>{{ $reservations->currentPage() }}</strong> dari <strong>{{ $reservations->lastPage() }}</strong>.<br/>
						Menampilkan <strong>{{ ((($reservations->currentPage() -1) * $reservations->perPage()) + 1) }}</strong> sampai <strong>{{ ((($reservations->currentPage() -1) * $reservations->perPage()) + $reservations->count()) }}</strong> dari <strong>{{ $reservations->total() }}</strong> data yang ada.<br/>
					@endif
				</br>
				{{ $reservations->links() }}
            </div>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#example').DataTable(

                        {

                            "aLengthMenu": [
                                [5, 10, 25, -1],
                                [5, 10, 25, "All"]
                            ],
                            "iDisplayLength": 5
                        }
                    );
                });

                function checkAll(bx) {
                    var cbs = document.getElementsByTagName('input');
                    for (var i = 0; i < cbs.length; i++) {
                        if (cbs[i].type == 'checkbox') {
                            cbs[i].checked = bx.checked;
                        }
                    }
                }
            </script>

        </section>

        <!-- One -->
        <section id="one" class="wrapper style3 fullscreen fade-up">
            <div class="inner">
                <h2>DAFTAR PC</h2>
                <div style="align-items: right"><a class="btn btn-primary" data-toggle="modal" data-target="#addPC"><i class="fas fa-edit fa-fw"></i>Tambah</a></td>
                </div>
                <br> @if(count($computer))
                <div class="table-wrapper">
                    <table id="example" class="table table-striped table-fixed" style="width:100%">
                        <thead>
                            <tr>
                                <th class="col-xs-2">No PC</th>
                                <th class="col-xs-2">Lab</th>
                                <th class="col-xs-2">Status</th>
                                <th colspan="2">CRUD</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($computer as $m)
                            <tr>
                                <td class="col-xs-2">{{$m->no_pc}}</td>
                                <td class="col-xs-2">{{$m->computer->nama_lab}}</td>
                            @if($m->status == 0)
                                <td class="col-xs-2">Tersedia</td>
                            @elseif($m->status == 1)
                                <td class="col-xs-2">Pengajuan</td>
                            @else
                                <td class="col-xs-2">Dipinjam</td>
                            @endif
                                <td><a type="button" class="btn btn-warning" data-toggle="modal" data-target="#editPC{{$m->id}}"><i class="fas fa-edit fa-fw"></i>Edit</a>
                                
                                <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#delPC{{$m->id}}"><i class="fas fa-trash fa-fw"></i>Hapus</a></td>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="alert alert-warning">
                    <i class="fa fa-exclamation-triangle"></i> Data belum ada
                </div>
                @endif
			@if ($computer->hasPages())
					Halaman <strong>{{ $computer->currentPage() }}</strong> dari <strong>{{ $computer->lastPage() }}</strong>.<br/>
					Menampilkan <strong>{{ ((($computer->currentPage() -1) * $computer->perPage()) + 1) }}</strong> sampai <strong>{{ ((($computer->currentPage() -1) * $computer->perPage()) + $computer->count()) }}</strong> dari <strong>{{ $computer->total() }}</strong> data yang ada.<br/>
				@endif
				</br>
				{{ $computer->fragment('one')->links() }}
            </div>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#example').DataTable(

                        {

                            "aLengthMenu": [
                                [5, 10, 25, -1],
                                [5, 10, 25, "All"]
                            ],
                            "iDisplayLength": 5
                        }
                    );
                });

                function checkAll(bx) {
                    var cbs = document.getElementsByTagName('input');
                    for (var i = 0; i < cbs.length; i++) {
                        if (cbs[i].type == 'checkbox') {
                            cbs[i].checked = bx.checked;
                        }
                    }
                }
            </script>

            <!-- Modal Tambah-->
            <div class="modal fade" id="addPC" tabindex="-1" role="dialog" aria-labelledby="addPC" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-color: #b74e91;">
                        <div class="modal-header">
                            <h2 class="modal-title" id="addPC">Tambah PC</h2>
                            <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                            {!! Form::open(array('route' => ('computer.store'))) !!}
                            <div class="row gtr-uniform" style="justify-content: center;">
                                <div class="col-11">
                                    {!! Form::label('no_pc', 'No PC') !!} {!! Form::number('no_pc' ,null , array('class' => 'form-control','placeholder'=>'')) !!}
                                </div>
                                <div class="col-11">
                                    {!! Form::label('id_lab', 'LAB') !!}
                                    <select name="id_lab" id="LABs">
                                        <option value="{{$m->id_lab}}">{{$m->computer->nama_lab}}</option>
                                    </select>
                                </div>
                                <div class="col-11">
                                    {!! Form::label('status', 'Status') !!}
                                    <select name="status" id="PCs">
                                        <option value="">- Status PC -</option>
                                        <option value="0">Tersedia</option>
                                        <option value="1">Pengajuan</option>
                                        <option value="2">Dipinjam</option>
                                    </select>                                   
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            {!! Form::button('<i class="fa fa--square"></i>'. 'close', array('type' => 'close', 'class' => 'btn btn-secondary btn-sm','data-dismiss' => 'modal' ))!!} {!! Form::button('<i class="fa fa-check-square"></i>'. ' Add', array('type' => 'submit', 'class' => 'btn btn-primary btn-sm'))!!} {!! Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Edit-->
            @foreach($computer as $m)
            <div class="modal fade" id="editPC{{ $m->id}}" tabindex="-1" role="dialog" aria-labelledby="editPC" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-color: #b74e91;">
                        <div class="modal-header">
                            <h2 class="modal-title" id="editPC{{ $m->id}}">Edit PC</h2>
                            <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                            {!!Form::model($m,['method'=>'PATCH', 'action'=>['ComputerController@update',$m->id]]) !!}
                            <div class="row gtr-uniform" style="justify-content: center;">
                                <div class="col-11">
                                    {!! Form::label('no_pc', 'No PC') !!}
                                    <input type="text" readonly class="form-control-plaintext" id="no_pc" value="{{$m->no_pc}}">
                                </div>
                                <div class="col-11">          
                                    {!! Form::label('id_lab', 'LAB') !!}
                                    <input type="text" readonly class="form-control-plaintext" id="nama_lab" value="{{$m->computer->nama_lab}}">
                                </div>
                                <div class="col-11">
                                    {!! Form::label('status', 'Status') !!}
                                    <select name="status" id="PCs">
                                        <option value="">- Status PC -</option>
                                        <option value="0">Tersedia</option>
                                        <option value="1">Pengajuan</option>
                                        <option value="2">Dipinjam</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            {!! Form::button('<i class="fa fa--square"></i>'. 'Close', array('type' => 'close', 'class' => 'btn btn-secondary btn-sm', 'data-dismiss' => 'modal' ))!!} {!! Form::button('<i class="fa fa-check-square"></i>'. 'Update', array('type' => 'submit', 'class' => 'btn btn-primary btn-sm'))!!} {!! Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Modal Delete -->
            @foreach($computer as $m)
            <div class="modal fade" id="delPC{{ $m->id}}" tabindex="-1" role="dialog" aria-labelledby="delPC" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content" style="background-color: #b74e91;">
                        <div class="modal-header">
                            <h3 class="modal-title" id="editPC">DELETE PC</h3>
                            <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                            {!! Form::open(array('route' => array('computer.destroy', $m->id), 'method' => 'delete')) !!}

                            Anda Yakin Ingin Menghapus data ??
                        </div>
                        <div class="modal-footer">
                            {!! Form::button('<i class="fa fa--square"></i>'. 'Close', array('type' => 'close', 'class' => 'btn btn-secondary btn-sm', 'data-dismiss' => 'modal' ))!!}
                            {!! Form::button('<i class="fas fa-trash"></i>'. 'Delete', array('type' => 'submit', 'class' => 'btn btn-danger btn-sm'))!!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </section>

    </div>

    <!-- Scripts -->

    <script src="{{ asset('theme2/assets/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('theme2/assets/js/jquery.scrollex.min.js') }}" defer></script>
    <script src="{{ asset('theme2/assets/js/jquery.scrolly.min.js') }}" defer></script>
    <script src="{{ asset('theme2/assets/js/browser.min.js') }}" defer></script>
    <script src="{{ asset('theme2/assets/js/breakpoints.min.js') }}" defer></script>
    <script src="{{ asset('theme2/assets/js/util.js') }}" defer></script>
    <script src="{{ asset('theme2/assets/js/main.js') }}" defer></script>

</body>

</html>