<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agrofarm Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('Admin/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('Admin/assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Admin/assets/css/style.css')}}">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
                <div class="sidebar-brand-icon rotate-n-15 img-responsive">
                </div>
                <div class="sidebar-brand-text mx-3">Agrofarm<sup>Admin</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Table
            </div>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/TablePerusahaan">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Table Perusahaan</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/TableProducts">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Table Products</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/TablePertanyaan">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Table Pertanyaan</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/TablePimpinan">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Table Pimpinan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables Data Perusahaan</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Perusahaan</h6>
                        </div>
                        <div class="container">
                            <form action="/TablePerusahaan/create/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <table class="mx-auto text-center">
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <input required="" type="text" name="namaperusahaan" autocomplete="off" class="input">
                                                <label class="user-label">Nama Perusahaan (Text)</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input required="" type="file" name="photobesar" autocomplete="off" class="input" accept="image/*">Background</input>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input required="" type="file" name="photokecil" autocomplete="off" class="input" accept="image/*">Foto Deskripsi</input>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input required="" type="text" name="clients" autocomplete="off" class="input">
                                                <label class="user-label">Clients (Angka)</label>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input required="" type="text" name="office" autocomplete="off" class="input">
                                                <label class="user-label">Office (Angka)</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <textarea required="" type="text" name="shortdeskripsi" autocomplete="off" class="input"></textarea>
                                                <label class="user-label">Short Deskripsi (Text)</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input required="" type="text" name="products" autocomplete="off" class="input">
                                                <label class="user-label">Products (Angka)</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input required="" type="text" name="workers" autocomplete="off" class="input">
                                                <label class="user-label">Workers (Angka)</label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <textarea required="" type="text" name="deskripsi" autocomplete="off" class="input"></textarea>
                                                <label class="user-label">Deskripsi (Text)</label>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <textarea required="" type="text" name="visi" autocomplete="off" class="input"></textarea>
                                                <label class="user-label">Visi (Text)</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <textarea required="" type="text" name="misi" autocomplete="off" class="input"></textarea>
                                                <label class="user-label">Misi (Text)</label>
                                            </div>
                                        </td>

                                    </tr>

                                </table>
                                <div class="container suare-box d-flex justify-content-center">
                                    <button type="submit" name="submit" value="Save">

                                        <div class="svg-wrapper-1 ">
                                            <div class="svg-wrapper ">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                                    <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                                                </svg>
                                            </div>
                                        </div>

                                        <span>Submit</span>
                                    </button>
                                </div>
                                <br><br>
                            </form>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright © 2023 &copy; PT Agrofarm Nusa Raya</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-secondary" type="button" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" class="d-none">
                            <input type="hidden" name="_token" value="Xxyg6uCeIziBcbZ2WYRx2dUb5KzA6ap0GWrHXd3s">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('Admin/assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('Admin/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('Admin/assets/js/sb-admin-2.min.js')}}"></script>

        <!-- Page level plugins -->
        <script src="{{asset('Admin/assets/vendor/chart.js/Chart.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('Admin/assets/js/demo/chart-area-demo.js')}}"></script>
        <script src="((asset('Admin/assets/js/demo/chart-pie-demo.js')}}"></script>

</body>


</html>