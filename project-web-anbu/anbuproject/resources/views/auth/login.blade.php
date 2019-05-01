<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>LOGIN | RESERVASI PC</title>
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
                            <li><a href="#intro"><h3>SELAMAT DATANG</h3></a></li>
                            <!-- <li><a href="#one">DAFTAR</a></li> -->
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
                            <h2> LOGIN</h2>
                            <br>

                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="row gtr-uniform" style="justify-content: center;">
                                    <div class="col-7 ">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" input=old{email} value="" placeholder="Email" required />
                                        @if ($errors->has('email'))
                                            @foreach ($errors->get('email') as $error)
                                            <h5 class="alert alert-danger">{{ $error }}</h5>
                                            @endforeach
                                        @endif
                                    </div>
                                     
                                    <div class="col-7">
                                        <label for="nrp">Password</label>
                                        <input type="password" name="password" id="pass" value="" placeholder="Password" required />
                                        @if ($errors->has('password'))
                                            @foreach ($errors->get('password') as $error)
                                            <h5 class="alert alert-danger">{{ $error }}</h5>
                                            @endforeach
                                        @endif
                                    </div>
                                                    
                                    <div class="col-7">
                                        <ul class="actions">
                                            <li><input type="submit" value="Login" class="primary" /></li>
                                            <!-- <li><input type="reset" value="Reset" /></li> -->
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