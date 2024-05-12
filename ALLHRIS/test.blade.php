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
    
    <title>Karyawan Profil</title>

    <style>
      .general-dropdown .menu-dropdown-general {
        display: none;
      }

      .general-dropdown .menu-dropdown-general.show{
        display: block;
        animation: slideDown 0.5s ease-out;
      }
        @keyframes slideDown {
        0% {
          transform: translateY(-10px);
          opacity: 0;
        }
        100% {
          transform: translateY(0);
          opacity: 1;
        }
      }

      .time-dropdown .menu-dropdown-time{
          display: none;
      }

      .time-dropdown .menu-dropdown-time.show{
        display: block;
        animation: slideDown 0.5s ease-out;
      }
        @keyframes slideDown {
        0% {
          transform: translateY(-10px);
          opacity: 0;
        }
        100% {
          transform: translateY(0);
          opacity: 1;
        }
      }

      .payroll-dropdown .menu-dropdown-payroll {
        display: none;
      }

      .payroll-dropdown .menu-dropdown-payroll.show{
        display: block;
        animation: slideDown 0.5s ease-out;
      }
        @keyframes slideDown {
        0% {
          transform: translateY(-10px);
          opacity: 0;
        }
        100% {
          transform: translateY(0);
          opacity: 1;
        }
      }

      .finance-dropdown .menu-dropdown-finance{
          display: none;
      }

      .finance-dropdown .menu-dropdown-finance.show{
        display: block;
        animation: slideDown 0.5s ease-out;
      }
        @keyframes slideDown {
        0% {
          transform: translateY(-10px);
          opacity: 0;
        }
        100% {
          transform: translateY(0);
          opacity: 1;
        }
      }

      .files-dropdown .menu-dropdown-files{
          display: none;
      }

      .files-dropdown .menu-dropdown-files.show{
        display: block;
        animation: slideDown 0.5s ease-out;
      }
        @keyframes slideDown {
        0% {
          transform: translateY(-10px);
          opacity: 0;
        }
        100% {
          transform: translateY(0);
          opacity: 1;
        }
      }

      .assets-dropdown .menu-dropdown-assets{
          display: none;
      }

      .assets-dropdown .menu-dropdown-assets.show{
        display: block;
        animation: slideDown 0.5s ease-out;
      }
        @keyframes slideDown {
        0% {
          transform: translateY(-10px);
          opacity: 0;
        }
        100% {
          transform: translateY(0);
          opacity: 1;
        }
      }

      .history-dropdown .menu-dropdown-history{
          display: none;
      }

      .history-dropdown .menu-dropdown-history.show{
        display: block;
        animation: slideDown 0.5s ease-out;
      }
        @keyframes slideDown {
        0% {
          transform: translateY(-10px);
          opacity: 0;
        }
        100% {
          transform: translateY(0);
          opacity: 1;
        }
      }

      .bi {
        font-style: normal;
      }

      .border.rounded-circle {
          object-fit: cover;
          object-position: center center;
      }

    </style>
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
    <div class="content px-4 py-4">
        <div class="container-fluid pt-4 d-flex shadow-sm flex-wrap g-0">
            <div class="profilNavigasi inline-block col-12 col-lg-3 px-3 px-lg-4">
                <div class="fotoProfil text-center mb-2">
                    <img src="img/ive/gaeul2.jpg" alt="Foto Profil" width="130" height="130" class="border rounded-circle">
                </div>
                <div class="profilNama text-center">
                    <h3 class="mb-0">Kim Ga Eul</h3>
                    <p>IT & GA</p>
                </div>

                <div class="ubahProfil text-center border-bottom pb-3">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Ubah Profil
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Foto Profil</a></li>
                    </ul>
                  </div>
                </div>

                <div class="profilMenu pt-3">
                    <ul class="list-unstyled general-dropdown">
                      <li class="d-flex justify-content-between text-start align-items-center my-2"><i class="bi bi-person fs-5"> General</i><i class="bi bi-caret-down-fill"></i>
                      </li>
                      <ul type="none" class="menu-dropdown-general">
                        <li class="pt-2"><a href="#" class="text-decoration-none text-black">Personal</a></li>
                        <li class="pt-3"><a href="#" class="text-decoration-none text-black">Employment</a></li>
                        <li class="pt-3"><a href="#" class="text-decoration-none text-black">Education & Experience</a></li>
                        <li class="pt-3 pb-3"><a href="#" class="text-decoration-none text-black">Additional Info</a></li>
                      </ul>
                    </ul>
                    <ul class="list-unstyled time-dropdown">
                      <li class="d-flex justify-content-between text-start align-items-center my-2"><i class="bi bi-clock fs-5"> Time Management</i><i class="bi bi-caret-down-fill"></i>
                      </li>
                      <ul type="none" class="menu-dropdown-time">
                        <li class="pt-2"><a href="#" class="text-decoration-none text-black">Personal</a></li>
                        <li class="pt-3"><a href="#" class="text-decoration-none text-black">Employment</a></li>
                        <li class="pt-3"><a href="#" class="text-decoration-none text-black">Education & Experience</a></li>
                        <li class="pt-3 pb-3"><a href="#" class="text-decoration-none text-black">Additional Info</a></li>
                      </ul>
                    </ul>
                    <ul class="list-unstyled payroll-dropdown">
                      <li class="d-flex justify-content-between text-start align-items-center my-2"><i class="bi bi-calculator fs-5"> Payroll</i><i class="bi bi-caret-down-fill"></i>
                      </li>
                      <ul type="none" class="menu-dropdown-payroll">
                        <li class="pt-2"><a href="#" class="text-decoration-none text-black">Personal</a></li>
                        <li class="pt-3"><a href="#" class="text-decoration-none text-black">Employment</a></li>
                        <li class="pt-3"><a href="#" class="text-decoration-none text-black">Education & Experience</a></li>
                        <li class="pt-3 pb-3"><a href="#" class="text-decoration-none text-black">Additional Info</a></li>
                      </ul>
                    </ul>
                    <ul class="list-unstyled finance-dropdown">
                      <li class="d-flex justify-content-between text-start align-items-center my-2"><i class="bi bi-cash fs-5"> Finance</i><i class="bi bi-caret-down-fill"></i>
                      </li>
                      <ul type="none" class="menu-dropdown-finance">
                        <li class="pt-2"><a href="#" class="text-decoration-none text-black">Personal</a></li>
                        <li class="pt-3"><a href="#" class="text-decoration-none text-black">Employment</a></li>
                        <li class="pt-3"><a href="#" class="text-decoration-none text-black">Education & Experience</a></li>
                        <li class="pt-3 pb-3"><a href="#" class="text-decoration-none text-black">Additional Info</a></li>
                      </ul>
                    </ul>
                    <ul class="list-unstyled files-dropdown">
                      <li class="d-flex justify-content-between text-start align-items-center my-2"><i class="bi bi-file-earmark fs-5"> Files</i><i class="bi bi-caret-down-fill"></i>
                      </li>
                      <ul type="none" class="menu-dropdown-files">
                        <li class="pt-2"><a href="#" class="text-decoration-none text-black">Personal</a></li>
                        <li class="pt-3"><a href="#" class="text-decoration-none text-black">Employment</a></li>
                        <li class="pt-3"><a href="#" class="text-decoration-none text-black">Education & Experience</a></li>
                        <li class="pt-3 pb-3"><a href="#" class="text-decoration-none text-black">Additional Info</a></li>
                      </ul>
                    </ul>
                    <ul class="list-unstyled assets-dropdown">
                      <li class="d-flex justify-content-between text-start align-items-center my-2"><i class="bi bi-archive fs-5"> Assets</i><i class="bi bi-caret-down-fill"></i>
                      </li>
                      <ul type="none" class="menu-dropdown-assets">
                        <li class="pt-2"><a href="#" class="text-decoration-none text-black">Personal</a></li>
                        <li class="pt-3"><a href="#" class="text-decoration-none text-black">Employment</a></li>
                        <li class="pt-3"><a href="#" class="text-decoration-none text-black">Education & Experience</a></li>
                        <li class="pt-3 pb-3"><a href="#" class="text-decoration-none text-black">Additional Info</a></li>
                      </ul>
                    </ul>
                    <ul class="list-unstyled history-dropdown mb-5">
                      <li class="d-flex justify-content-between text-start align-items-center my-2"><i class="bi bi-newspaper fs-5"> History</i><i class="bi bi-caret-down-fill"></i>
                      </li>
                      <ul type="none" class="menu-dropdown-history">
                        <li class="pt-2"><a href="#" class="text-decoration-none text-black">Personal</a></li>
                        <li class="pt-3"><a href="#" class="text-decoration-none text-black">Employment</a></li>
                        <li class="pt-3"><a href="#" class="text-decoration-none text-black">Education & Experience</a></li>
                        <li class="pt-3 pb-3"><a href="#" class="text-decoration-none text-black">Additional Info</a></li>
                      </ul>
                    </ul>
                </div>
            </div>

            <div class="dataProfil inline-block border-start flex-grow-1 p-3">
                <p class="text-primary mb-0">Employees / Yuniko Ivantara / General</p>
                <h3><b>Personal</b></h3>
            </div>

        </div>
    </div>
    {{-- AKHIR CONTENT --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
      // Mengaktifkan slide down menu saat tombol dropdown diklik
      var dropdownMenuGeneral = document.querySelector('.menu-dropdown-general');
      var dropdownToggleGeneral = document.querySelector('.general-dropdown');

      dropdownToggleGeneral.addEventListener('click', function () {
        dropdownMenuGeneral.classList.toggle('show');
      });
  
      // Menyembunyikan slide down menu saat area di luar dropdown diklik
      document.addEventListener('click', function (event) {
        var isClickInside = dropdownToggleGeneral.contains(event.target) || dropdownMenuGeneral.contains(event.target);
        if (!isClickInside) {
          dropdownMenuGeneral.classList.remove('show');
        }
      });

      var dropdownMenuTime = document.querySelector('.menu-dropdown-time');
      var dropdownToggleTime = document.querySelector('.time-dropdown');

      dropdownToggleTime.addEventListener('click', function () {
        dropdownMenuTime.classList.toggle('show');
      });
  
      // Menyembunyikan slide down menu saat area di luar dropdown diklik
      document.addEventListener('click', function (event) {
        var isClickInside = dropdownToggleTime.contains(event.target) || dropdownMenuTime.contains(event.target);
        if (!isClickInside) {
          dropdownMenuTime.classList.remove('show');
        }
      });

      var dropdownMenuPayroll = document.querySelector('.menu-dropdown-payroll');
      var dropdownTogglePayroll = document.querySelector('.payroll-dropdown');

      dropdownTogglePayroll.addEventListener('click', function () {
        dropdownMenuPayroll.classList.toggle('show');
      });
  
      // Menyembunyikan slide down menu saat area di luar dropdown diklik
      document.addEventListener('click', function (event) {
        var isClickInside = dropdownTogglePayroll.contains(event.target) || dropdownMenuPayroll.contains(event.target);
        if (!isClickInside) {
          dropdownMenuPayroll.classList.remove('show');
        }
      });
      
      var dropdownMenuFinance = document.querySelector('.menu-dropdown-finance');
      var dropdownToggleFinance = document.querySelector('.finance-dropdown');

      dropdownToggleFinance.addEventListener('click', function () {
        dropdownMenuFinance.classList.toggle('show');
      });
  
      // Menyembunyikan slide down menu saat area di luar dropdown diklik
      document.addEventListener('click', function (event) {
        var isClickInside = dropdownToggleFinance.contains(event.target) || dropdownMenuFinance.contains(event.target);
        if (!isClickInside) {
          dropdownMenuFinance.classList.remove('show');
        }
      });

      var dropdownMenuFiles = document.querySelector('.menu-dropdown-files');
      var dropdownToggleFiles = document.querySelector('.files-dropdown');

      dropdownToggleFiles.addEventListener('click', function () {
        dropdownMenuFiles.classList.toggle('show');
      });
  
      // Menyembunyikan slide down menu saat area di luar dropdown diklik
      document.addEventListener('click', function (event) {
        var isClickInside = dropdownToggleFiles.contains(event.target) || dropdownMenuFiles.contains(event.target);
        if (!isClickInside) {
          dropdownMenuFiles.classList.remove('show');
        }
      });

      var dropdownMenuAssets = document.querySelector('.menu-dropdown-assets');
      var dropdownToggleAssets = document.querySelector('.assets-dropdown');

      dropdownToggleAssets.addEventListener('click', function () {
        dropdownMenuAssets.classList.toggle('show');
      });
  
      // Menyembunyikan slide down menu saat area di luar dropdown diklik
      document.addEventListener('click', function (event) {
        var isClickInside = dropdownToggleAssets.contains(event.target) || dropdownMenuAssets.contains(event.target);
        if (!isClickInside) {
          dropdownMenuAssets.classList.remove('show');
        }
      });

      var dropdownMenuHistory = document.querySelector('.menu-dropdown-history');
      var dropdownToggleHistory = document.querySelector('.history-dropdown');

      dropdownToggleHistory.addEventListener('click', function () {
        dropdownMenuHistory.classList.toggle('show');
      });
  
      // Menyembunyikan slide down menu saat area di luar dropdown diklik
      document.addEventListener('click', function (event) {
        var isClickInside = dropdownToggleHistory.contains(event.target) || dropdownMenuHistory.contains(event.target);
        if (!isClickInside) {
          dropdownMenuHistory.classList.remove('show');
        }
      });
    </script>

    </body>
</html>
