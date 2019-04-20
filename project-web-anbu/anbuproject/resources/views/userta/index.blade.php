<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Stellar by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
        <noscript><link href="{{ asset('assets/css/noscript.css') }}" rel="stylesheet" /></noscript>
        
        
    </head>
    <style type="text/css">


    </style>

    <body class="is-preload">

        <!-- Wrapper -->
            <div id="wrapper">

                <!-- Header -->
                    <header id="header" class="alt">
                        <span class="logo"><img src="{{ asset('assets/images/logo.svg') }}" alt="" /></span>
                        <h1>ANBU PROJECT</h1>
                        <p>pc reservation for TA's user<br />
                        built by <a href="https://twitter.com/ajlkn">@anbusteam</a> for <a href="https://html5up.net">ANBUSCOMPANY</a>.</p>
                    </header>

                <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li><a href="#intro" class="active">CEK RESERVASI PC</a></li>
                            <li><a href="#first">DAFTAR</a></li>
                            <!-- <li><a href="#second">Second Section</a></li>
                            <li><a href="#cta">Get Started</a></li> -->
                        </ul>
                    </nav>

                <!-- Main -->
                    <div id="main">

                        <!-- Introduction -->
                            <section id="intro" class="main">
                                <header class="major">
                                    <h2>Cek Reservasi PC</h2>
                                </header>
                                <form method="post" action="#">
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
                                </form>

                                <div class="table-wrapper">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>NRP</th>
                                                        <th>Tanggal Reservasi</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="color: white;">
                                                    <tr class="bg-warning">
                                                        <td>05116712357970</td>
                                                        <td>09 - 04 - 2019</td>
                                                        <td>Belum Disetujui</td>
                                                    </tr>
                                                    <tr class="bg-success">
                                                        <td>05116712357970</td>
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

                            </section>

                        <!-- First Section -->
                            <section id="first" class="main special">
                                <header class="major">
                                    <h2>Daftar</h2>
                                </header>

                                <form method="post" action="#">
                                        <div class="row gtr-uniform" style="justify-content: space-around;">
                                            <div class="col-7 ">
                                                <input type="text" name="nama" id="nama" value="" placeholder="Nama" required />
                                            </div>
                                            <div class="col-7">
                                                <input type="text" name="nrp" id="nrp" value="" placeholder="NRP" required />
                                            </div>
                                            <div class="col-7">
                                                <input type="text" name="notelp" id="notelp" value="" placeholder="No.TELP" required/>
                                            </div>
                                            <div class="col-7">
                                                <input type="email" name="email" id="email" value="" placeholder="Email" required />
                                            </div>
                                            <div class="col-7">
                                                <select name="labs" id="labs">
                                                    <option value="">- Nama LAB -</option>
                                                    <option value="1">RPL</option>
                                                    <option value="1">KCV</option>
                                                    <option value="1">NCC</option>
                                                    <option value="1">LP</option>
                                                </select>
                                            </div>
                                            <div class="col-7">
                                                <select name="PCs" id="PCs">
                                                    <option value="">- Kode PC -</option>
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                </select>
                                            </div>

                                            <div class="col-7">
                                                <ul class="actions">
                                                    <li><a href="#" class="button icon fa-upload">Unggah Proposal</a></li>
                                                </ul>
                                            </div>
                                                    
                                                    <!-- <div class="col-6 col-12-small">
                                                        <input type="checkbox" id="demo-human" name="demo-human" checked>
                                                        <label for="demo-human">Not a robot</label>
                                                    </div> -->
                                                    
                                            <div class="col-7">
                                                <ul class="actions">
                                                    <li><input type="submit" value="Submit" class="primary" /></li>
                                                    <li><input type="reset" value="Reset" /></li>
                                                </ul>
                                          </div>
                                    </div>
                                </form>

                                
                                <footer class="major">
                                    <!-- <ul class="actions special">
                                        <li><a href="{{ url('generic') }}" class="button">Learn More</a></li>
                                    </ul> -->
                                </footer>
                            </section>

                    </div>

                <!-- Footer -->
                    <footer id="footer">

                        <p class="copyright">&copy; ANBUSTEAM.</p>
                    </footer>

            </div>

        <!-- Scripts -->
            <script src="{{ asset('assets/js/jquery.min.js') }}" defer></script>
            <script src="{{ asset('assets/js/jquery.scrollex.min.js') }}" defer></script>
            <script src="{{ asset('assets/js/jquery.scrolly.min.js') }}" defer></script>
            <script src="{{ asset('assets/js/browser.min.js') }}" defer></script>
            <script src="{{ asset('assets/js/breakpoints.min.js') }}" defer></script>
            <script src="{{ asset('assets/js/util.js') }}" defer></script>
            <script src="{{ asset('assets/js/main.js') }}" defer></script>
           
            <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

    </body>
</html>
