<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Pengelola Absensi</title>
        <style>
            #dash:hover ,#laporan:hover,#laporan_absen:hover, #laporan_pulang:hover,#data:hover,#data_karyawan:hover,#data_hrd:hover,#data_admin:hover,#data_ka_ruang:hover,#cetak_laporan:hover,#cetak_data:hover{
                background-color: rgba(255, 255, 255, 0.459);
            }
        </style>
	<link rel="icon" href="{!! asset('assets/icons/favicon.ico') !!}"/>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{!! asset('css/dashboard.css') !!}" rel="stylesheet" />
        

        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #56382D;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Pengelola Absensi </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button" style="background-color: #E6B794;"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggl" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Hai</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav" >
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" style="background-color: #56382D; background-position-x: right;"id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div  class="nav">

                            <a id="dash"class="nav-link" href="" style="color: #E5DBCF;">
                                <div style="color: #E5DBCF;" class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a id="laporan" class="nav-link collapsed"style="color: #E5DBCF;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns" style="color: #E5DBCF;"></i></div>
                                Laporan
                                <div style="color: #E5DBCF;" class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div  class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav " style="color: #E5DBCF;">
                                    <a id="laporan_absen" class="nav-link" href="/laporan_absen" style="color: #E5DBCF;">Laporan Absen</a>
                                    <a id="laporan_pulang" class="nav-link" href="/laporan_pulang" style="color: #E5DBCF;">Laporan Pulang</a>
                                </nav>
                            </div>
                            <a id="data" style="color: #E5DBCF;" class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open" style="color: #E5DBCF;"></i></div>
                                Data
                                <div style="color: #E5DBCF;" class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div style="color: #E5DBCF;" class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages" style="color: #E5DBCF;">
                                    <a id="data_karyawan" style="color: #E5DBCF;" class="nav-link" href="/data_karyawan">
                                        Data Karyawan
                                    </a>
                                    <a id="data_hrd" style="color: #E5DBCF;" class="nav-link" href="/data_hrd">
                                        Data Hrd
                                    </a>
                                    <a id="data_admin"style="color: #E5DBCF;" class="nav-link" href="/data_admin">
                                        Data Admin
                                    </a>
                                    <a id="data_ka_ruang" style="color: #E5DBCF;" class="nav-link" href="/data_karu">
                                        Data Kepala Ruangan
                                    </a>
                                </nav>
                            </div>
                            <a id="laporan" class="nav-link collapsed"style="color: #E5DBCF;" href="#" data-bs-toggle="collapse" data-bs-target="#collapseJadwal" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns" style="color: #E5DBCF;"></i></div>
                                Jadwal
                                <div style="color: #E5DBCF;" class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div  class="collapse" id="collapseJadwal" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav " style="color: #E5DBCF;">
                                    <a id="laporan_absen" class="nav-link" href="/jadwal" style="color: #E5DBCF;">Jadwal</a>
                                    <a id="laporan_pulang" class="nav-link" href="/shift" style="color: #E5DBCF;">shift</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading" style="color: #E5DBCF;">Cetak</div>
                            <a id="cetak_laporan" style="color: #E5DBCF;" class="nav-link" href="/cetak_laporan">
                                <div style="color: #E5DBCF;" class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Cetak Laporan
                            </a>
                            <a id="cetak_data" style="color: #E5DBCF;" class="nav-link" href="/cetak_Data">
                                <div style="color: #E5DBCF;" class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Cetak Data
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer" style="color: #E5DBCF; background-color: #56382D;">
                        <div class="small" style="color: #E5DBCF;">Logged in as:</div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
            @yield('container')
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; RSUI Harapan Anda</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{!! asset('js/scripts.js') !!}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{!! asset('assets/demo/chart-area-demo.js') !!}"></script>
        <script src="{!! asset('assets/demo/chart-bar-demo.js') !!}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{!! asset('js/datatables-simple-demo.js') !!}"></script>
        
    </body>
</html>
