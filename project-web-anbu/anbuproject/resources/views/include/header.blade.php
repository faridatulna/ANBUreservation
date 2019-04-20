HEADER -->
<nav class="navbar navbar-default navbar-fixed-top navShadow">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <!-- <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'AKADEMIK') }}
            </a> -->

        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}"><i class="fa fa-home"></i>
	&nbsp;&nbsp;AKADEMIK</a></li>
                <!-- <li><a href="{{ url('/mahasiswa') }}"><i class="fa fa-user"></i>
	&nbsp;&nbsp;Mahasiswa</a></li>
                <li><a href="{{ url('/dosen') }}"><i class="fa fa-university"></i>
	&nbsp;&nbsp;Dosen</a></li>
                <li><a href="{{ url('/matakuliah') }}"><i class="fa fa-book"></i>&nbsp;&nbsp;Mata Kuliah</a></li>
                <li><a href="{{ url('/jadwal') }}"><i class="fa fa-calendar"></i>
    &nbsp;&nbsp;Jadwal</a></li> -->
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                     <li><a href="{{ route('login') }}">Login</a></li>
                     <li><a href="{{ route('register') }}">Register</a></li>
                 @else
                      <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->nama }} <span class="caret"></span></a>

                      <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                            </form>
                        </li>
                       </ul>
                       </li>
                 @endif

            </ul>

        </div>
    </div>
</nav>
<br>
<br>
<br>
<br>
<!-- END HEADER