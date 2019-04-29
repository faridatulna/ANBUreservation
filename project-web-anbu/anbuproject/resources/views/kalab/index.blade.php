<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>DOSEN LAB | RESERVASI PC</title>
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
                    <li>
                        <button class="button large primary disabled"><i class="fas fa-user fa-fw"></i> DOSEN LAB</button>
                    </li>
                    <br>
                    <li><a href="#intro">DAFTAR PENGAJUAN RESERVASI PC</a></li>
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
                <h2 style="justify-content: space-between;"> DAFTAR PENGAJUAN </h2>
                <br>
                <br>

                <form action="{{ url()->current() }}">
                    <div class="row gtr-uniform" style="justify-content: center;">
                        <div class="col-6 col-12-xsmall">
                            <input type="text" name="keyword" id="keyword" value="" placeholder="Masukkan NRP" />
                        </div>

                        <div>
                            <ul class="actions">
                                <li>
                                    <input type="submit" value="Cari" class="primary" />
                                </li>
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
                                <td class="clickable" data-toggle="collapse" id="row{{ $reservation->id}}" data-target=".row{{ $reservation->id}}">
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
                            <tr class="collapse row{{ $reservation->id}} bg-white" style="color: black">
                                <td>{{$reservation->nama}}</td>
                                <td>{{$reservation->nrp}}</td>
                                <td>{{$reservation->email}}</td>
                                <td>{{$reservation->no_hp}}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm"><i class="fas fa-eye fa-fw"></i>Lihat</button>
                                </td>
                                <td>
                                    <form action="{{ route('getDownload', $reservation->proposal) }}">
                                        <button class="btn btn-primary btn-sm"><i class="fas fa-download fa-fw"></i>Unduh</button>
                                    </form>
                                </td>
                            </tr>
                            <form method="POST" action="{{ route('kalab.setuju', $reservation->id) }}">
                                @csrf
                                <tr class="bg-white collapse row{{ $reservation->id}}">
                                    <td colspan="4"></td>
                                    <td>
                                        <button class="btn btn-success btn-sm" name="status" value="3">Setujui</button>
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

    <script src="{{ asset('theme2/assets/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('theme2/assets/js/jquery.scrollex.min.js') }}" defer></script>
    <script src="{{ asset('theme2/assets/js/jquery.scrolly.min.js') }}" defer></script>
    <script src="{{ asset('theme2/assets/js/browser.min.js') }}" defer></script>
    <script src="{{ asset('theme2/assets/js/breakpoints.min.js') }}" defer></script>
    <script src="{{ asset('theme2/assets/js/util.js') }}" defer></script>
    <script src="{{ asset('theme2/assets/js/main.js') }}" defer></script>

</body>

</html>