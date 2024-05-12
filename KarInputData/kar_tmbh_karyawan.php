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
    <title>Tambah Karyawan</title>
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
    <div class="content bg-light px-4 py-2">
        <div class="bodyTambahKaryawan bg-white border rounded px-3 py-2 mt-4">
            <p class="text-body-tertiary mb-0" id="judulNav">Employees</p>
            <h4><b>Tambah Karyawan</b></h4>
            <div class="container-fluid mt-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" id="dataPersonal-tab" data-bs-toggle="tab" href="#dataPersonal" role="tab" aria-controls="dataPersonal" aria-selected="true">Data Personal</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="dataKaryawan-tab" data-bs-toggle="tab" href="#dataKaryawan" role="tab" aria-controls="dataKaryawan" aria-selected="false">Data Karyawan</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled fw-light" id="bpjs-tab" data-bs-toggle="tab" href="#bpjs" role="tab" aria-controls="bpjs" aria-selected="false">Payroll</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled fw-light" id="bpjs-tab" data-bs-toggle="tab" href="#bpjs" role="tab" aria-controls="bpjs" aria-selected="false">Invite Employee</a>
                      </li>
                    <!-- Tambahkan tab atau bagian lainnya sesuai kebutuhan -->
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active py-3" id="dataPersonal" role="tabpanel" aria-labelledby="dataPersonal-tab">
                    <!-- Form untuk data personal -->
                    @include('form_data_personal')
                      <div class="mt-3 d-flex justify-content-end">
                        <button type="button" id="nextButton" class="btn btn-primary">Next</button>
                      </div>
                    </div>
                    <div class="tab-pane fade py-3" id="dataKaryawan" role="tabpanel" aria-labelledby="dataKaryawan-tab">
                    <!-- Form untuk data karyawan -->
                    @include('form_data_karyawan')
                      <div class="mt-3 d-flex justify-content-end">
                        <button type="button" id="backButton" class="btn btn-secondary me-3">Back</button>
                        <button type="button" id="nextButton" class="btn btn-primary">Next</button>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="bpjs" role="tabpanel" aria-labelledby="bpjs-tab">
                    <!-- Form untuk BPJS -->
                    {{-- <?php include 'form_bpjs.php'; ?> --}}
                    </div>
                    <div class="tab-pane fade" id="bpjs" role="tabpanel" aria-labelledby="bpjs-tab">
                      <!-- Form untuk BPJS -->
                      {{-- <?php include 'form_bpjs.php'; ?> --}}
                    </div>
                    <!-- Tambahkan tab atau bagian lainnya sesuai kebutuhan -->
                </div>
                </div>
            </div>
        </div>
    </div>
    {{-- AKHIR CONTENT --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <script>
    function switchToNextTab() {
        const dataKaryawanTab = document.getElementById("dataKaryawan-tab");
        const dataKaryawanPane = document.getElementById("dataKaryawan");
        dataKaryawanTab.classList.add("active");
        dataKaryawanPane.classList.add("active", "show");

        const dataPersonalTab = document.getElementById("dataPersonal-tab");
        const dataPersonalPane = document.getElementById("dataPersonal");
        dataPersonalTab.classList.remove("active");
        dataPersonalPane.classList.remove("active", "show");

        scrollToTop();
    }

    function switchToBackTab() {
        const dataPersonalTab = document.getElementById("dataPersonal-tab");
        const dataPersonalPane = document.getElementById("dataPersonal");
        dataPersonalPane.classList.add("active", "show");
        dataPersonalTab.classList.add("active", "show");

        const dataKaryawanTab = document.getElementById("dataKaryawan-tab");
        const dataKaryawanPane = document.getElementById("dataKaryawan");
        dataKaryawanPane.classList.remove("active");
        dataKaryawanTab.classList.remove("active", "show");

        scrollToTop();
    }

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Event listener untuk tombol "Next"
    const nextButton = document.getElementById("nextButton");
    nextButton.addEventListener("click", switchToNextTab);

    // Event listener untuk tombol "Back"
    const backButton = document.getElementById("backButton");
    backButton.addEventListener("click", switchToBackTab);

    </script>
    </body>
</html>