<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .dataTables_filter {
            visibility: hidden;
        }
        .dataTables_paginate {
            position: absolute;
            right: 12px;
            margin-top: -2.5em; /* Sesuaikan dengan tinggi pagination */
        }
    </style>
    <title>Daftar Karyawan</title>
</head>
<body>
    <header>
        <nav class="navbar bg-primary navbar-expand-lg shadow-sm sticky-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="img/logo.png" width="50" alt="Logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link text-white fw-bold" aria-current="page" href="#">Dashboard</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Employees
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Time Management
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Finance
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white fw-bold" aria-current="page" href="#">Payroll</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white fw-bold" aria-current="page" href="#">Company</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-sm btn-light shadow-sm btn-hover me-3" type="submit">SEARCH</button>
                </form>
                <div class="dropdown border-0">
                    <button class="btn border-0 position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-envelope-fill fs-3 text-white"></i><span class="position-absolute translate-middle badge rounded-pill text-bg-danger" style="top:1rem; font-size:11px;">+99 <span class="visually-hidden">unread messages</span></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end arrow-none">
                      <li><a class="dropdown-item" href="#">Profil</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="dropdown border-0">
                    <button class="btn border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="img/profil.png" alt="Profil" width="25">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#">Profil</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
              </div>
            </div>
          </nav>
    </header>

    {{-- Awal Content --}}
    <div class="content px-4 py-2">
        {{-- Awal Baris Pertama --}}
        <div class="container-fluid py-3 d-flex flex-wrap justify-content-between">
            <div class="judul">
                <h4><b>Employees</b></h4>
            </div>
            <div class="menu d-flex flex-wrap">
                <div class="dropdown me-2 mb-2">
                    <button class="btn bg-white shadow-sm text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      More
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="me-2 mb-2">
                    <button class="btn bg-white shadow-sm text-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Employee transfer
                    </button>
                  </div>
                <div class="dropdown">
                    <button class="btn bg-primary shadow-sm text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Add Employee
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Akhir Baris Pertama --}}

        {{-- Awal Baris Kedua --}}
        <div class="container-fluid d-lg-flex justify-content-between">
            <div class="kolom1 d-lg-flex">
                <div class="kolom1Menu1 d-flex flex-wrap mb-2 me-lg-2">
                    <div class="border rounded col-12 col-lg-auto text-center px-2 py-2 d-flex justify-content-between">
                        <div class="icon1 me-lg-3">
                            <i class="bi bi-card-list"></i><a href="#" class="ms-2 text-black text-decoration-none">Directory</a>
                        </div>
                        <div class="icon2">
                            <i class="bi bi-diagram-3"></i><a href="#" class="ms-2 text-black text-decoration-none">Org Chart</a>
                        </div>
                    </div>
                </div>
                <div class="kolom1Menu2 mb-2">
                    <div class="p-1 border rounded-3">
                        <select class="form-select border-0" aria-label="Default select example" style="padding-right: 8.5rem">
                          <option selected>Filter (1)</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                </div>
            </div>
            <div class="kolom2 d-flex flex-wrap justify-content-between">
                <div class="kolom2Menu1 mb-2 col-12 col-md-6">
                    <div class="tools d-flex justify-content-between px-0 px-lg-3">
                        <i class="bi bi-database-fill fs-4 me-3"></i>
                        <i class="bi bi-upload fs-4 mx-3"></i>
                        <i class="bi bi-vector-pen fs-4 mx-3"></i>
                        <i class="bi bi-graph-up fs-4 mx-3"></i>
                        <i class="bi bi-question-circle fs-4 ms-3 me-lg-3"></i>
                    </div>
                </div>
                <div class="search col-12 col-md-auto">
                    <input id="searchInput" class="form-control" type="search" placeholder="Search" aria-label="Search">
                </div>
            </div>
        </div>

        {{-- Akhir Baris Kedua --}}

        {{-- Awal Baris Ketiga --}}
        <div class="container-fluid mt-3">
            <div class="border rounded py-3 px-3 d-flex flex-wrap justify-content-between text-center text-sm-start">
                <div class="overviewOfPeriod col-12 col-sm-6 col-lg-auto mt-2 mb-2">
                    <p class="mb-0 fw-light">Overview of period</p>
                    <h5><b>March 2024</b></h5>
                </div>
                <div class="totalEmployees col-12 col-sm-6 col-lg-auto mt-2 mb-2">
                    <p class="mb-0 fw-light">Total Employees</p>
                    <h5><b>108</b></h5>
                </div>
                <div class="newHire col-12 col-sm-6 col-lg-auto mt-2 mb-2">
                    <p class="mb-0 fw-light">New Hire</p>
                    <h5><b>1</b></h5>
                </div>
                <div class="leaving col-12 col-sm-6 col-lg-auto mt-2 mb-2">
                    <p class="mb-0 fw-light">Leaving</p>
                    <h5><b>0</b></h5>
                </div>
                <div class="detail d-flex align-items-center col-12 col-sm-6 col-lg-auto mt-2 mb-2 justify-content-center justify-content-sm-start">
                    <a href="#" class="text-decoration-none ms-lg-5">See Details</a>
                    <a href="#" class="text-decoration-none me-lg-5"><i class="bi bi-arrow-bar-right text-primary"></i></a>
                  </div>
            </div>
        </div>
        {{-- Akhir Baris Ketiga --}}

        {{-- Isi Data Tables --}}
        <div class="container-fluid pt-3 position-relative">
            <div class="table-responsive">
                <table id="example" class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center"><input type="checkbox" id="selectAll"></th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>30</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn bg-primary shadow-sm text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Actions
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Rei</td>
                            <td>Teknik Informatika</td>
                            <td>New York</td>
                            <td>24</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn bg-primary shadow-sm text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Actions
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Serena</td>
                            <td>Multimedia</td>
                            <td>Shanghai</td>
                            <td>22</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn bg-primary shadow-sm text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Actions
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>April</td>
                            <td>DKV</td>
                            <td>Tokyo</td>
                            <td>21</td>
                            <td>2011/04/25</td>
                            <td>$500,800</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn bg-primary shadow-sm text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Actions
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Koira</td>
                            <td>English Major</td>
                            <td>Hoghwarts</td>
                            <td>22</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn bg-primary shadow-sm text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Actions
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lin</td>
                            <td>Chinese Major</td>
                            <td>Shenzhen</td>
                            <td>20</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn bg-primary shadow-sm text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Actions
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Takagami</td>
                            <td>Japanese Major</td>
                            <td>Akita</td>
                            <td>24</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn bg-primary shadow-sm text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Actions
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Ryu Nakagami</td>
                            <td>Engineering</td>
                            <td>Saporo</td>
                            <td>22</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn bg-primary shadow-sm text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Actions
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Suzu Hirose</td>
                            <td>Arts</td>
                            <td>Hokkaido</td>
                            <td>22</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn bg-primary shadow-sm text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Actions
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Yuniko</td>
                            <td>Japanese Major</td>
                            <td>Sapporo</td>
                            <td>22</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn bg-primary shadow-sm text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Actions
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="jarak mb-5"></div>

    </div>
    {{-- Akhir Content --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                lengthChange: false,
                pageLength: 5,
                info: false,
                columnDefs: [
                    { 
                        targets: 0, 
                        orderable: false, 
                        className: 'dt-body-center',
                        render: function(data, type, full, meta) {
                            return '<input type="checkbox">';
                        }
                    }
                ]
            });

            // Remove sorting ability from the first column header
            $('#example thead th:first-child').removeClass('sorting_asc sorting_desc sorting');

            // Remove sorting ability from the last column header initially
            $('#example thead th:last-child').removeClass('sorting_asc sorting_desc sorting');

            // Menghapus kelas sorting dari kolom terakhir setelah pengurutan kolom lain
            $('#example').on('order.dt', function () {
                $('#example thead th:last-child').removeClass('sorting_asc sorting_desc sorting');
            });
            

            // Menambahkan event listener untuk kotak centang "Select All"
            $('#selectAll').on('change', function() {
                table.rows({ search: 'applied' }).nodes().to$().find('input[type="checkbox"]').prop('checked', this.checked);
            });

            // DataTable custom search field
            $('#searchInput').keyup(function() {
                table.search(this.value).draw();
                $('#example thead th:first-child').removeClass('sorting_asc sorting_desc sorting');
                $('#example thead th:last-child').removeClass('sorting_asc sorting_desc sorting')
            });

            // Memilih semua baris pada semua halaman
            table.selectAll.init('#selectAll');
        });

    </script>
        
    </body>
</html>