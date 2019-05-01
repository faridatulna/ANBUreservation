<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>RESERVASI PC</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="{{ asset('theme2/assets/css/main.css') }}" rel="stylesheet">
    <noscript>
        <link href="{{ asset('theme2/assets/css/noscript.css') }}" rel="stylesheet" />
    </noscript>
</head>

<body class="is-preload">
    <!-- Sidebar -->
    <section id="sidebar">
        <div class="inner">
            <nav>
                <ul>
                    <li><a href="#intro">Home</a></li>
                    <li><a href="#one">CEK RESERVASI PC</a></li>
                    <li><a href="#two">DAFTAR</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Intro -->
        <section id="intro" class="wrapper style1 fullscreen fade-up">
            <div class="inner">
                <h2>WELCOME</h2>
                <p> Sudahkah kamu melakukan reservasi PC ? </p>
                    <ul class="actions">
                        <li><a href="#two" class="button large">Belum</a></li>
                        <li><a href="#one" class="button large">Sudah</a></li>
                    </ul>
            </div>
        </section>

        <!-- One -->
        <section id="one" class="wrapper style2 fullscreen fade-up">
            <div class="inner">
                <h2> CEK RESERVASI PC</h2>
                <br>
                <form action="{{ url()->current() }}#one">
                    <div class="row gtr-uniform" style="justify-content: center;">
                        <div class="col-6 col-12-xsmall">
                            <input type="text" name="keyword" id="keyword" value="" placeholder="Masukkan NRP" />
                        </div>

                        <div>
                            <ul class="actions">
                                <li>
                                    <button class="button primary"><i class="fas fa-search fa-fw"></i> Cek </button>
                                </li>
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
                            @foreach($reservations as $reservation) @if($reservation->status == 1)
                            <tr class="bg-info">
                                <td>{{$reservation->nrp}}</td>
                                <td>{{$reservation->lab->nama_lab}}</td>
                                <td>{{$reservation->no_pc}}</td>
                                <td>{{$reservation->tgl_pinjam}}</td>
                                <td>Verifikasi Admin</td>
                            </tr>
                            @elseif($reservation->status == 2)
                            <tr class="bg-primary">
                                <td>{{$reservation->nrp}}</td>
                                <td>{{$reservation->lab->nama_lab}}</td>
                                <td>{{$reservation->no_pc}}</td>
                                <td>{{$reservation->tgl_pinjam}}</td>
                                <td>Verifikasi Kalab</td>
                            </tr>
                            @elseif($reservation->status == 3)
                            <tr class="bg-success">
                                <td>{{$reservation->nrp}}</td>
                                <td>{{$reservation->lab->nama_lab}}</td>
                                <td>{{$reservation->no_pc}}</td>
                                <td>{{$reservation->tgl_pinjam}}</td>
                                <td>Disetujui</td>
                            </tr>
                            @elseif($reservation->status == 4)
                            <tr class="bg-danger">
                                <td>{{$reservation->nrp}}</td>
                                <td>{{$reservation->lab->nama_lab}}</td>
                                <td>{{$reservation->no_pc}}</td>
                                <td>{{$reservation->tgl_pinjam}}</td>
                                <td>Dibatalkan</td>
                            </tr>
                            @elseif($reservation->status == 5)
                            <tr class="bg-danger">
                                <td>{{$reservation->nrp}}</td>
                                <td>{{$reservation->lab->nama_lab}}</td>
                                <td>{{$reservation->no_pc}}</td>
                                <td>{{$reservation->tgl_pinjam}}</td>
                                <td>Ditolak</td>
                            </tr>
                            @elseif($reservation->status == 0)
                            <tr class="bg-warning">
                                <td>{{$reservation->nrp}}</td>
                                <td>{{$reservation->lab->nama_lab}}</td>
                                <td>{{$reservation->no_pc}}</td>
                                <td>{{$reservation->tgl_pinjam}}</td>
                                <td>Diajukan</td>
                            </tr>
                            @endif @endforeach
                        </tbody>

                    </table>
                </div>
				@if ($reservations->hasPages())
					Halaman <strong>{{ $reservations->currentPage() }}</strong> dari <strong>{{ $reservations->lastPage() }}</strong>.<br/>
					Menampilkan <strong>{{ ((($reservations->currentPage() -1) * $reservations->perPage()) + 1) }}</strong> sampai <strong>{{ ((($reservations->currentPage() -1) * $reservations->perPage()) + $reservations->count()) }}</strong> dari <strong>{{ $reservations->total() }}</strong> data yang ada.<br/>
				@endif
				</br>
				{{ $reservations->fragment('one')->links() }}
            </div>
            
        </section>

        <!-- Two -->
        <section id="two" class="wrapper style3 fade-up">
            <div class="inner">
                <h2>DAFTAR</h2>
                <br>

                <form method="post" action="{{ route('reservation.store') }}#two" enctype="multipart/form-data">
                    @csrf
                    <div class="row gtr-uniform" style="justify-content: center;">
                        <div class="col-6 ">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" value="" placeholder="Nama" required />
                        </div>
                        <div class="col-6">
                            <label for="nrp">NRP</label>
                            <input type="text" name="nrp" id="nrp" value="" placeholder="NRP" required />
                            @if ($errors->has('nrp'))
                                @foreach ($errors->get('nrp') as $error)
                                    <h5 class="alert alert-danger">{{ $error }}</h5>
                                @endforeach
                            @endif
                        </div>
                        <div class="col-6">
                            <label for="no_hp">No.TELP</label>
                            <input type="text" name="no_hp" id="no_hp" value="" placeholder="No.TELP" required/>
                        </div>

                        <div class="col-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email" required />
                            @if ($errors->has('email'))
                                @foreach ($errors->get('email') as $error)
                                    <h5 class="alert alert-danger">{{ $error }}</h5>
                                @endforeach
                            @endif
                        </div>
                        <div class="col-6">
                            {!! Form::label('id_lab', 'LAB') !!} 
                            <select name="id_lab" id="id_lab" class="form-control">
                                <option>Pilih Lab</option>
                                @foreach($lab as $l)
                                <option value="{{$l->id}}">{{$l->nama_lab}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('id_lab'))
                                @foreach ($errors->get('id_lab') as $error)
                                    <h5 class="alert alert-danger">{{ $error }}</h5>
                                @endforeach
                            @endif
                        </div>
                        <div class="col-6">
                            {!! Form::label('no_pc', 'NO PC') !!}
                            <select class="form-control" name="no_pc" id="no_pc" required>
                                <option value="">No PC</option>
                            </select>
                            @if ($errors->has('no_pc'))
                                @foreach ($errors->get('no_pc') as $error)
                                    <h5 class="alert alert-danger">{{ $error }}</h5>
                                @endforeach
                            @endif
                        </div>

                        <div class="col-7">
                            <label class="button icon fa-upload" for="my-file-selector">
                                <input name="proposal" id="my-file-selector" type="file" style="display:none" onchange="$('#upload-file-info').html(this.files[0].name)" required> Unggah Berkas
                            </label>
                            <span class='label label-info' id="upload-file-info"></span>
                            @if ($errors->has('proposal'))
                                @foreach ($errors->get('proposal') as $error)
                                    <h5 class="alert alert-danger">{{ $error }}</h5>
                                @endforeach
                            @endif
                        </div>

                        <div class="col-6">
                            <ul class="actions">
                                <li>
                                    <input type="submit" value="Submit" class="primary" />
                                </li>
                                <li>
                                    <input type="reset" value="Reset" /> 
                                </li>
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
    <script>
        $('#id_lab').change(function(){
            $("#no_pc option").remove();
            let id = $(this).find(":selected").val();
            // alert(id);
            // $('#no_pc').append($('<option value="">09283982</option>'));
            $.ajax({
                url : '{{ route( 'loadComputer' ) }}',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id
                    },
                type: 'post',
                dataType: 'json',
                success: function( result )
                {
                    // console.log(data);
                    $.each( result, function(k, v) {
                            $('#no_pc').append($('<option>', {value:k, text:v}));
                    });
                },
                error: function()
                {
                    //handle errors
                    alert('error...');
                }
            });
        });
    </script>

</body>

</html>