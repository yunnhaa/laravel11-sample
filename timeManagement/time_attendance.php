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
        .dropdown .btn {
            border: none;
        }
        .dropdown .btn:focus {
        outline: none;
        box-shadow: none;
        border:none;
        }
    </style>
    <title>Time Attendance</title>
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
                <h4><b>Attendance</b></h4>
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
                <div>
                    <button class="btn bg-primary shadow-sm text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Attendance Report
                    </button>
                </div>
            </div>
        </div>

        {{-- Akhir Baris Pertama --}}

        {{-- Awal Baris Kedua --}}
        <div class="container-fluid d-lg-flex justify-content-between">
            @include('time_attendancetools')
        </div>

        {{-- Akhir Baris Kedua --}}

        {{-- Awal Baris Ketiga --}}
        <div class="container-fluid pt-3 d-flex flex-wrap justify-content-between">
            @include('time_attendanceinfo')
        </div>
        {{-- Akhir Baris Ketiga --}}

        {{-- Isi Data Tables --}}
        <div class="container-fluid pt-3 position-relative">
            <div class="table-responsive pb-5">
                <table id="example" class="table table-striped mb-5">
                    <thead>
                        <tr>
                            <th class="text-center"><input type="checkbox" id="selectAll"></th>
                            <th>Nama Karyawan</th>
                            <th>ID Karyawan</th>
                            <th>Tanggal</th>
                            <th>Shift</th>
                            <th>Jadwal Masuk</th>
                            <th>Jadwal Keluar</th>
                            <th>Jam Masuk</th>
                            <th>Jam Keluar</th>
                            <th>Kode Absen</th>
                            <th>Kode Cuti</th>
                            <th>Lembur</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>Rahmat Handika</td>
                            <td>MED 010</td>
                            <td>Tue, 14 May 2024</td>
                            <td>N</td>
                            <td>08:00</td>
                            <td>17:00</td>
                            <td>07:33</td>
                            <td>-</td>
                            <td>H</td>
                            <td>-</td>
                            <td></td>
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
                            <td>Dady Ramdany</td>
                            <td>MED 039</td>
                            <td>Tue, 14 May 2024</td>
                            <td>N</td>
                            <td>08:00</td>
                            <td>17:00</td>
                            <td>08:04</td>
                            <td>-</td>
                            <td>H</td>
                            <td>-</td>
                            <td></td>
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