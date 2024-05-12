<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Dashboard</title>
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

    {{-- CONTENT --}}

    <div class="content bg-light px-4 py-2">

        {{-- WELCOME --}}

        <div class="container-fluid bg-white mt-2">
            <div class="bg-white shadow-md">
                <div class="row d-flex flex-wrap justify-content-between">
                    <div class="col-12 col-md-8 flex-grow-1 min-vw-50">
                        <div class="greetings px-2 py-3">
                            <h3>Good Morning, <span>Yuniko Satria Ivantara!</span></h3>
                            <p>It's Monday, 23 April 2024</p>
                        </div>
                        <div class="shortcut px-2 d-none d-lg-inline-block mt-5">
                            <span>Shortcut</span>
                            <div class="menushortcut mt-1 d-flex flex-wrap">
                                <button type="button" class="btn btn-danger me-1 mb-2">LIVE ATTENDANCE</button>
                                <button type="button" class="btn btn-primary me-1 mb-2">REQUEST REIMBURSEMENT</button>
                                <button type="button" class="btn btn-info me-1 mb-2">REQUEST TIME OFF</button>
                                <button class="btn btn-secondary dropdown-toggle mb-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    LIVE ATTENDANCE
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col col-lg-3 gambar text-center text-lg-end">
                        <img src="img/adminvector.png" alt="admin vector" width="250" height="250">
                    </div>
                </div>

                {{-- SAAT LAYAR MD --}}

                <div class="row">
                    <div class="shortcut px-2 d-lg-none d-lg-block mb-3">
                        <span>Shortcut</span>
                        <div class="menushortcut mt-1">
                            <button type="button" class="btn btn-danger me-1 mb-2">LIVE ATTENDANCE</button>
                            <button type="button" class="btn btn-primary me-1 mb-2">REQUEST REIMBURSEMENT</button>
                            <button type="button" class="btn btn-info me-1 mb-2">REQUEST TIME OFF</button>
                            <button class="btn btn-secondary dropdown-toggle mb-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                LIVE ATTENDANCE
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- AKHIR LAYAR MD --}}

            </div>
        </div>

        {{-- AKHIR WELCOME --}}

        {{-- DATA - DATA CHART --}}

        <div class="container-fluid bg-light mt-3">
            <div class="row flex-wrap justify-content-between">
                <div class="col-12 col-sm-5 col-md-5 col-lg-2 bg-white shadow-sm px-3 py-3 mb-3">
                    <div class="judul d-flex justify-content-between align-items-center">
                        <h5>Employment status</h5>
                        <i class="bi bi-three-dots-vertical fs-5"></i>
                    </div>
                    <div class="progress mt-3">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 5.6%" aria-valuenow="5.6" aria-valuemin="0" aria-valuemax="100"><span>5.6%</span></div>
                        <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 94.4%" aria-valuenow="94.4" aria-valuemin="0" aria-valuemax="100"><span>94.4%</span></div>
                    </div>
                    <div class="percentage d-flex justify-content-between">
                        <div><span>0%</span></div>
                        <div><span>100%</span></div>
                    </div>
                    <div class="total mt-4">
                        <div class="total2 d-flex justify-content-between border-bottom">
                            <span>Total</span>
                            <span>108</span>
                        </div>
                        <div class="permanent d-flex flex-wrap justify-content-between border-bottom">
                            <div class="col flex-grow-1 judul">
                                <span class="d-flex"><i class="bi bi-square-fill text-primary me-1"></i>Permanent</span>
                            </div>
                            
                            <div class="col-6 data d-flex justify-content-between">
                                <span>6</span>
                                <span>5.6%</span>
                            </div>
                        </div>
                        <div class="contract d-flex flex-wrap justify-content-between border-bottom">
                            <div class="col flex-grow-1 judul me-3">
                                <span class="d-flex"><i class="bi bi-square-fill text-warning me-1"></i>Contract</span>
                            </div>
                            
                            <div class="col-6 data d-flex justify-content-between">
                                <span>6</span>
                                <span>5.6%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-5 col-md-5 col-lg-2 bg-white shadow-sm px-3 py-3 mb-3">
                    <div class="judul d-flex justify-content-between align-items-center">
                        <h5>Length of service</h5>
                        <i class="bi bi-three-dots-vertical fs-5"></i>
                    </div>
                    <div class="chartBar">
                        <canvas id="myChart" width="auto" height="193"></canvas>
                    </div>
                </div>

                <div class="col-12 col-sm-5 col-md-5 col-lg-2 bg-white shadow-sm px-3 py-3 mb-3">
                    <div class="judul d-flex justify-content-between align-items-center">
                        <h5>Job level</h5>
                        <i class="bi bi-three-dots-vertical fs-5"></i>
                    </div>
                    <div class="progress mt-3">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 81.5%" aria-valuenow="81.5" aria-valuemin="0" aria-valuemax="100"><span>81.5%</span></div>
                        <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10.2%" aria-valuenow="10.2" aria-valuemin="0" aria-valuemax="100"><span>10.2%</span></div>
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 5.6%" aria-valuenow="5.6" aria-valuemin="0" aria-valuemax="100"><span>5.6%</span></div>
                        <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated flex-fill" role="progressbar" style="width: 0.9%" aria-valuenow="0.9" aria-valuemin="0" aria-valuemax="100"><span>0.9%</span></div>
                    </div>
                    <div class="percentage d-flex justify-content-between">
                        <div><span>0%</span></div>
                        <div><span>100%</span></div>
                    </div>
                    <div class="total mt-4">
                        <div class="total2 d-flex justify-content-between border-bottom">
                            <span>Total</span>
                            <span>108</span>
                        </div>
                        <div class="staff d-flex flex-wrap justify-content-between border-bottom">
                            <div class="col flex-grow-1 judul" style="margin-right:2.92rem">
                                <span class="d-flex"><i class="bi bi-square-fill text-primary me-1"></i>Staff</span>
                            </div>
                            
                            <div class="col-6 data d-flex justify-content-between">
                                <span>6</span>
                                <span>5.6%</span>
                            </div>
                        </div>
                        <div class="supervisor d-flex flex-wrap justify-content-between border-bottom">
                            <div class="col flex-grow-1 judul" style="margin-right: 0.26rem">
                                <span class="d-flex"><i class="bi bi-square-fill text-warning me-1"></i>Supervisor</span>
                            </div>
                            
                            <div class="col-6 data d-flex justify-content-between">
                                <span>6</span>
                                <span>5.6%</span>
                            </div>
                        </div>
                        <div class="manager d-flex flex-wrap justify-content-between border-bottom">
                            <div class="col flex-grow-1 judul" style="margin-right: 0.95rem">
                                <span class="d-flex"><i class="bi bi-square-fill text-success me-1"></i>Manager</span>
                            </div>
                            
                            <div class="col-6 data d-flex justify-content-between">
                                <span>6</span>
                                <span>5.6%</span>
                            </div>
                        </div>
                        <div class="ceo d-flex flex-wrap justify-content-between border-bottom">
                            <div class="col flex-grow-1 judul" style="margin-right: 3.16rem">
                                <span class="d-flex"><i class="bi bi-square-fill text-danger me-1"></i>Ceo</span>
                            </div>
                            
                            <div class="col-6 data d-flex justify-content-between">
                                <span>6</span>
                                <span>5.6%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-5 col-md-5 col-lg-2 bg-white shadow-sm px-3 py-3 mb-3">
                    <div class="judul d-flex justify-content-between align-items-center">
                        <h5>Gender diversity</h5>
                        <i class="bi bi-three-dots-vertical fs-5"></i>
                    </div>
                    <div class="doughnutChart mt-2" style="max-width: 100vw; margin:auto;">
                        <canvas id="donutChart" width="auto" height="90"></canvas>
                    </div>
                    <div class="total mt-4">
                        <div class="total2 d-flex justify-content-between border-bottom">
                            <span>Total</span>
                            <span>108</span>
                        </div>
                        <div class="permanent d-flex flex-wrap justify-content-between border-bottom">
                            <div class="col flex-grow-1 judul" style="margin-right: 1.98rem">
                                <span class="d-flex"><i class="bi bi-square-fill me-1" style="color:rgba(54, 162, 235)"></i>Male</span>
                            </div>
                            
                            <div class="col-6 data d-flex justify-content-between">
                                <span>6</span>
                                <span>5.6%</span>
                            </div>
                        </div>
                        <div class="contract d-flex flex-wrap justify-content-between border-bottom">
                            <div class="col flex-grow-1 judul me-3">
                                <span class="d-flex"><i class="bi bi-square-fill me-1" style="color:rgba(255, 99, 132)"></i>Female</span>
                            </div>
                            
                            <div class="col-6 data d-flex justify-content-between">
                                <span>6</span>
                                <span>5.6%</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- AKHIR DATA - DATA CHART --}}


    </div>

    {{-- AKHIR CONTENT --}}

    <script>
        // Data yang akan digunakan untuk membuat grafik
        const data = {
            labels: ["< 1 year", "1 - 3 year", "3 - 5 year", "5 - 10 year"],
            datasets: [{
                label: '',
                data: [42, 48, 10, 5],
                backgroundColor: [
                    'rgba(255, 99, 132)',
                    'rgba(54, 162, 235)',
                    'rgba(255, 206, 86)',
                    'rgba(75, 192, 192)',
                    'rgba(153, 102, 255)'
                ]
            }]
        };
    
    
        const options = {
            responsive: true,
            maintainAspectRatio: false, // Menambahkan ini untuk membuat grafik responsif
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };
    
        // Mendapatkan elemen canvas
        const ctx = document.getElementById('myChart').getContext('2d');
    
        // Membuat grafik menggunakan Chart.js
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    
         // Data untuk chart donut
         const donutData = {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple"],
            datasets: [{
                label: '',
                data: [76, 31],
                backgroundColor: [
                    'rgba(54, 162, 235)',
                    'rgba(255, 99, 132)'
                    
                ]
            }]
        };
    
        // Konfigurasi untuk chart donut
        const donutOptions = {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'false'
                }
            }
        };
    
        // Mendapatkan elemen canvas untuk chart donut
        const donutCtx = document.getElementById('donutChart').getContext('2d');
    
        // Membuat chart donut menggunakan Chart.js
        const donutChart = new Chart(donutCtx, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
</body>
</html>