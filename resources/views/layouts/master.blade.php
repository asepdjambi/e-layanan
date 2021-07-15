<!doctype html>
<html lang="en">

<head>
    <title>e-LAYANAN DINAS PERHUBUNGAN KABUPATEN BATANG HARI</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/chartist/css/chartist-custom.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="{{ asset('admin/assets/font/font.css') }}" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/jquery/jquery-ui.css') }}">

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous"> --}}
    {{-- tes membuat datepicker --}}
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="/"><img src="{{ asset('admin/assets/img/e-layanan-logo.png') }}" alt="Klorofil Logo" class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth">
                        <i class="lnr lnr-arrow-left-circle"></i>
                    </button>
                </div>
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary">Go</button>
                        </span>
                    </div>
                </form>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('admin/assets/img/user_2.png') }}" class="img-circle" alt="Avatar">
                                <span>{{ auth()->user()->username }}</span>
                                <i class="icon-submenu lnr lnr-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        <i class="lnr lnr-user"></i>
                                        <span>My Profile</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lnr lnr-envelope"></i>
                                        <span>Message</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="lnr lnr-cog"></i>
                                        <span>Settings</span></a>
                                </li>
                                <li>
                                    <a href="/logout">
                                        <i class="lnr lnr-exit"></i>
                                        <span>Logout</span></a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li> <a class="update-pro"
                            href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro"
                            title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i>
                            <span>UPGRADE TO PRO</span></a> </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li>
                            <a href="/depan" class="active">
                                <i class="lnr lnr-home"></i>
                                <span>Dashboard</span></a>
                        </li>
                        @if (auth()->user()->role == 'admin')
                            <li>
                                <a href="/user" class="">
                                    <i class="lnr lnr-user"></i>
                                    <span>USER</span></a>
                            </li>
                                 <li>
                                <a href="/pegawai" class="">
                                    <i class="lnr lnr-user"></i>
                                    <span>PEGAWAI</span></a>
                            </li>

                        @endif
                         <li>
                                   <a href="/agenda" class="">
                                             <i class="lnr lnr-calendar-full"></i>

                                             <span>Agenda Pejabat</span></a>
                         </li>


                        <li>
                            <a href="/tamu" class="">
                                <i class="lnr lnr-user"></i>
                                <span>Kunjungan Tamu</span></a>
                        </li>
                        <li>
                            <a href="/surattampil" class="">
                                <i class="lnr lnr-envelope"></i>
                                <span>Surat Masuk</span></a>
                        </li>
                        <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed">
                                <i class="lnr lnr-file-empty"></i>
                                <span>Permohonan</span>
                                <i class="icon-submenu lnr lnr-chevron-left"></i>
                            </a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li>
                                        <a href="/bus" class="">Penggunaan Mobil</a>
                                    </li>
                                    <li>
                                        <a href="/jarak" class="">Jarak Tempuh</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subPages2" data-toggle="collapse" class="collapsed">
                                <i class="lnr lnr-file-empty"></i>
                                <span>Rekom</span>
                                <i class="icon-submenu lnr lnr-chevron-left"></i>
                            </a>
                            <div id="subPages2" class="collapse ">
                                <ul class="nav">
                                    {{-- <li>
                                        <a href="#" class="">Dispensasi</a>
                                    </li> --}}
                                    <li>
                                        <a href="/kir" class="">KIR</a>
                                    </li>
                                    {{-- <li>
                                        <a href="/kirtruk" class="">KIR TRUCK</a>
                                    </li> --}}
                                    <li>
                                        <a href="/pengguna" class="">Penggunaan Jalan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            @yield('content')
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">Created by
                    <i class="fa fa-love"></i>
                    Asep Syaifudin, S.Kom, M.Kom
                </p>
            </div>
        </footer>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    {{-- <script src="{{asset('admin/assets/scripts/bootstrap.bundle.min.js')}}"
    integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous">
    </script> --}}
    <script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery/jquery.mask.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    {{-- <script src="{{asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script> --}}
    <script src="{{ asset('admin/assets/vendor/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('admin/assets/scripts/klorofil-common.js') }}"></script>

    {{-- membuat input tanggal menjadi 15-10-2020 --}}
    {{-- <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.js')}}"></script> --}}
    <script src="{{ asset('admin/assets/vendor/jquery/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery/jquery-ui_1_12_1.js') }}"></script>
    {{-- <script src="{{asset('admin/assets/vendor/datepicker/js/bootstrap-datepicker.js')}}"></script> --}}


    {{-- <script type="text/javascript">
        $(document).ready(function () {
                        $('.tanggal').datepicker({
                            format: "dd-mm-yyyy",
                            autoclose:true
                        });
                    });
    </script> --}}

    {{-- <script>
                $( function() {
    $( "#date" ).datepicker({
      dateFormat: "dd-mm-yy"
    });
  } );
    
    </script> --}}


    {{-- // script membuat datepicker dengan format 15-10-2020 --}}
    <script type="text/javascript">
        $('.datepicker').datepicker({
            dateFormat: "yy-mm-dd"
        });

    </script>

    {{-- membuat format rupiah --}}
    <script type="text/javascript">
        var rupiah = document.getElementById('rupiah');
        rupiah.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value, 'Rp. ');
            // hanya angka saja tanpa 'Rp'
            rupiah.value = formatRupiah(this.value);
        });

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

    </script>

    {{-- kembali ke halaman sebelumnya --}}
    <script>
        function goBack() {
            window.history.back();
        }

    </script>

</body>

</html>
