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
        .tanggal1 .form-control {
            border: none;
        }
        .tanggal1 .form-control:focus {
            border: none;
            box-shadow: none;
        }
        .dropdown-toggle:focus {
            border:none;
            
        }
        .dropdown-toggle {
            border: none !important;
        }
        .input-group-append {
            cursor: pointer;
        }

    </style>
    <title>Karyawan Attendance</title>
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

    {{-- AWAL CONTENT --}}
    <div class="content px-4 py-2">
        {{-- AWAL BARIS PERTAMA --}}
        <div class="container-fluid d-flex flex-wrap justify-content-between py-3">
            <div class="judul">
                <p class="fw-light mb-0">Attendance</p>
                <h4><b>Employee Attendance</b></h4>
            </div>
            <div class="tombol d-flex align-items-center">
                <button type="button" class="btn btn-outline-dark me-3">Import</button>
                <button type="button" class="btn btn-primary">Export</button>
            </div>
        </div>
        {{-- AKHIR BARIS KEDUA --}}

        {{-- BARIS KETIGA --}}

        <div class="container-fluid d-flex flex-wrap">
            <div class="menu1 col-12 col-lg-auto d-flex flex-wrap justify-content-between">
                <div class="karyawanDropdown border rounded d-flex align-items-center px-2 mb-3 col-12 col-md-auto me-lg-3">
                    <img src="img/profil.png" alt="Foto Profil" width="20" height="20">
                    <div class="dropdown">
                        <button class="btn btn-white btn-outline-none dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Adhitya Putra Pratama
                        </button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item d-flex align-items-center" href="#"><img src="img/profil.png" alt="Foto Profil" width="20" height="20" class="me-2">Adhitya Putra Pratama</a></li>
                        </ul>
                    </div>
                </div>

                <div class="tanggal d-flex align-items-center mb-3 col-12 col-md-auto">
                    <div class="tanggal1 border rounded col-12 col-md-auto">
                        <div class="input-group date" id="datepicker">
                        <input type="text" placeholder="Mar 2024" class="form-control" id="date"/>
                        <span class="input-group-append">
                            <span class="input-group-text bg-light d-block ms-2">
                            <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu2 col-12 col-lg-auto d-flex flex-wrap justify-content-between ms-lg-3">
                <div class="selecttime col-12 col-md-auto">
                    <select class="form-select aria-label="Default select example" style="padding-right: 7rem">
                        <option selected>Time Filter</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="icon col-12 col-md-auto text-end ms-lg-3">
                    <i class="bi bi-database-fill fs-4 me-3"></i>
                </div>
            </div>
        </div>

        {{-- AKHIR BARIS KETIGA --}}

        {{-- BARIS KEEMPAT --}}
        <div class="container-fluid pt-3 d-flex flex-wrap justify-content-between">
            <div class="present border rounded mb-3 col-12 col-lg-auto">
                <div class="d-flex bg-light border rounded px-2 justify-content-between align-items-center">
                    <h5 class="mt-2"><b>Present</b></h5>
                    <i class="bi bi-info-circle-fill fs-5"></i>
                </div>
                    <div class="kotak d-flex mt-2">
                        <div class="on-time ps-2">
                            <h5 class="mb-0">7</h5>
                            <span>On Time</span>
                        </div>
                        <div class="on-time ps-4">
                            <h5 class="mb-0">14</h5>
                            <span>Late Clock In</span>
                        </div>
                        <div class="on-time ps-4 pe-4">
                            <h5 class="mb-0">3</h5>
                            <span>Early Clock Out</span>
                        </div>
                    </div>
                <div class="late-clock"></div>
                <div class="early-clock-out"></div>
            </div>

            <div class="notPresent border rounded mb-3 col-12 col-lg-auto">
                <div class="d-flex bg-light border rounded px-2 justify-content-between align-items-center">
                    <h5 class="mt-2"><b>Not Present</b></h5>
                    <i class="bi bi-info-circle-fill fs-5"></i>
                </div>
                    <div class="kotak d-flex mt-2">
                        <div class="on-time ps-2">
                            <h5 class="mb-0">1</h5>
                            <span>No clock in</span>
                        </div>
                        <div class="on-time ps-4">
                            <h5 class="mb-0">5</h5>
                            <span>No Clock Out</span>
                        </div>
                        <div class="on-time ps-4">
                            <h5 class="mb-0">0</h5>
                            <span>Invalid</span>
                        </div>
                        <div class="on-time ps-4 pe-4">
                            <h5 class="mb-0">2</h5>
                            <span>Absent</span>
                        </div>
                    </div>
                <div class="late-clock"></div>
                <div class="early-clock-out"></div>
            </div>

            <div class="away border rounded mb-3 col-12 col-lg-auto">
                <div class="d-flex bg-light border rounded px-2 justify-content-between align-items-center">
                    <h5 class="mt-2"><b>Away</b></h5>
                    <i class="bi bi-info-circle-fill fs-5"></i>
                </div>
                    <div class="kotak d-flex mt-2">
                        <div class="on-time ps-2">
                            <h5 class="mb-0">0</h5>
                            <span>Time Off</span>
                        </div>
                        <div class="on-time ps-4 pe-4">
                            <h5 class="mb-0">5</h5>
                            <span>Day off</span>
                        </div>
                    </div>
                <div class="late-clock"></div>
                <div class="early-clock-out"></div>
            </div>

        </div>
        {{-- AKHIR BARIS KEEMPAT --}}

        {{-- BARIS TABLE --}}
        <div class="container-fluid pt-3 position-relative">
            <div class="table-responsive">
                <table id="example" class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center"><input type="checkbox" id="selectAll"></th>
                            <th>Date</th>
                            <th>Shift</th>
                            <th>Schedule In</th>
                            <th>Schedule Out</th>
                            <th>Clock In</th>
                            <th>Clock Out</th>
                            <th>Attedance Code</th>
                            <th>Time Off</th>
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
                            <td>H</td>
                            <td>-</td>
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
        {{-- AKHIR BARIS TABLE --}}

    </div>
    {{-- AKHIR CONTENT --}}

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