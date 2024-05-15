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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Time Management Overtime</title>
    <style>
        .dataTables_filter {
            visibility: hidden;
        }
        .dataTables_paginate {
            position: absolute;
            right: 1rem;
            bottom: 7rem; 
        }
        .dataTables_info {
            position: absolute;
            top: 3rem;
            left: 0rem;
        }
        .dataTables_length {
            position: absolute;
        }
    </style>
</head>
<body class="bg-light">
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
                            <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Employees</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Time Management</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Finance</a>
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
                            <i class="bi bi-envelope-fill fs-3 text-white"></i>
                            <span class="position-absolute translate-middle badge rounded-pill text-bg-danger" style="top:1rem; font-size:11px;">+99 <span class="visually-hidden">unread messages</span></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end arrow-none">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                    <div class="dropdown border-0">
                        <button class="btn border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="img/profil.png" alt="Profile" width="25">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="content px-4 py-2 bg-light">
        <div class="container-fluid bg-white shadow-sm p-3">
            <div class="header d-flex flex-wrap justify-content-between mb-2">
                <div class="judul mb-3">
                    <h3><b>Overtime</b></h3>
                </div>
                <div class="requestOvertime mb-3">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Request Overtime
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="menu d-flex flex-wrap justify-content-between">
                <div class="dropdownMenu d-flex flex-wrap justify-content-between col-12 col-lg-7">
                    <div class="filter col-12 col-md-3 col-lg-3">
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Filter</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="allCompensation col-12 col-md-4 col-lg-4">
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>All Compensation</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="allStatus col-12 col-md-4 col-lg-4">
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>All Status</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="searchMenu col-12 col-lg-3 mb-3">
                    <input id="searchInput" class="form-control" type="search" placeholder="Search" aria-label="Search">
                </div>
            </div>

            <div class="tabelAttendance position-relative">
                <div class="table-responsive pt-3" style="padding-bottom: 10rem">
                    <table id="example" class="table table-striped pt-5" style="margin-bottom: 10rem">
                        <thead>
                            <tr>
                                <th>Request Date</th>
                                <th>Overtime Date</th>
                                <th>Employee ID</th>
                                <th>Employee</th>
                                <th>Compensation</th>
                                <th>Duration</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>13 May 2024</td>
                                <td>13 May 2024</td>
                                <td>MED 010</td>
                                <td>Rahmat Handika</td>
                                <td>Paid Overtime</td>
                                <td>1h</td>
                                <td>Pending</td>
                                <td class="text-end">
                                    <a href="#" class="text-decoration-none">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>11 May 2024</td>
                                <td>11 May 2024</td>
                                <td>MED OHIH 010</td>
                                <td>Fauzi</td>
                                <td>Paid Overtime</td>
                                <td>5h 8m</td>
                                <td>Approved</td>
                                <td class="text-end">
                                    <a href="#" class="text-decoration-none">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                pageLength: 10,
                columnDefs: [
                    { orderable: false, targets: -1 }
                ]
            });

            $('#example thead th:last-child').removeClass('sorting_asc sorting_desc sorting');

            $('#searchInput').keyup(function() {
                table.search(this.value).draw();
            });
        });
    </script>
    </body>
</html>