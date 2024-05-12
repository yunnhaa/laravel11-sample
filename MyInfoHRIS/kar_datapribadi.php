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
      <div class="container-fluid shadow-sm d-flex flex-wrap">
        <div class="profil col-12 col-lg-3 px-3 py-4">
          @include('kar_profil')
        </div>
        <div class="informasi col-12 col-lg-9 border-sm-start py-3 px-sm-3">
          <div id="generalPersonalInclude">
            @include('kar_personal')
          </div>
          <div id="generalEmploymentInclude" style="display: none;">
            @include('kar_employment')
          </div>
          {{-- <div id="generalEducation" style="display: none;">
            @include('kar_employment')
          </div> --}}
          <div id="generalAdditionalInclude" style="display: none;">
            @include('kar_additionalinfo')
          </div>
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


      var employmentLink = document.getElementById('generalEmployment');
var employmentDiv = document.getElementById('generalEmploymentInclude');
var personalLink = document.getElementById('generalPersonal');
var personalDiv = document.getElementById('generalPersonalInclude');
var additionalInfoLink = document.getElementById('generalAdditionalInfo');
var additionalInfoDiv = document.getElementById('generalAdditionalInclude');

// Menambahkan event listener untuk klik pada personalLink
personalLink.addEventListener('click', function() {
  // Mengubah display dari personalDiv menjadi block saat link di-klik
  personalDiv.style.display = 'block';

  // Menyembunyikan employmentDiv jika ada
  employmentDiv.style.display = 'none';

  // Mengembalikan tampilan link employment ke normal
  employmentLink.style.fontWeight = 'normal';
  additionalInfoLink.style.fontWeight = 'normal';
  
  // Mengatur tampilan link personal menjadi bold
  personalLink.style.fontWeight ='bold';
});

// Menambahkan event listener untuk klik pada employmentLink
employmentLink.addEventListener('click', function() {
  // Mengubah display dari employmentDiv menjadi block saat link di-klik
  employmentDiv.style.display = 'block';

  // Menyembunyikan personalDiv jika ada
  personalDiv.style.display = 'none';

  // Mengembalikan tampilan link personal ke normal
  personalLink.style.fontWeight = 'normal';
  additionalInfoLink.style.fontWeight = 'normal';
  
  // Mengatur tampilan link employment menjadi bold
  employmentLink.style.fontWeight = 'bold';
});

additionalInfoLink.addEventListener('click', function() {
  // Mengubah display dari additionalInfoDiv menjadi block saat link di-klik
  additionalInfoDiv.style.display = 'block';

  // Menyembunyikan employmentDiv dan personalDiv jika ada
  employmentDiv.style.display = 'none';
  personalDiv.style.display = 'none';
  
  // Mengembalikan tampilan link employment dan personal ke normal
  employmentLink.style.fontWeight = 'normal';
  personalLink.style.fontWeight = 'normal';
  
  // Mengatur tampilan link additionalInfo menjadi bold
  additionalInfoLink.style.fontWeight = 'bold';
});

    </script>

    </body>
</html>
