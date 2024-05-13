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
    <title>Change Password</title>
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
    <div class="content px-4 py-2 bg-light">
        <div class="container pt-3 bg-white shadow-sm py-5 mt-3">
            <div class="passwordTab">
                <div class="col-12 d-flex justify-content-between">
                    <div class="informasi col-12 col-md-8 mx-auto">
                        <h3><b>Settings</b></h3>
                        <p>Change Password</p>
                        <div class="container-fluid mt-4 col-12">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                <a class="nav-link active" id="dataPersonal-tab" data-bs-toggle="tab" href="#dataPersonal" role="tab" aria-controls="dataPersonal" aria-selected="true">Payslip PDF</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="dataKaryawan-tab" data-bs-toggle="tab" href="#dataKaryawan" role="tab" aria-controls="dataKaryawan" aria-selected="false">Account</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active py-3" id="dataPersonal" role="tabpanel" aria-labelledby="dataPersonal-tab">
                                    <form action="#">
                                        <div class="judul px-md-5">
                                            <h5><b>Change Password Payslip PDF</b></h5>
                                        </div>
                                        <div class="currentPassword px-md-5">
                                            <label for="currentPayslip" class="mb-1">Input Your Current Payslip Password</label>
                                            <input type="text" name="currentPayslip" class="form-control mb-2" placeholder="Current password" id="currentPayslip">
                                        </div>
                                        <div class="newPassword px-md-5">
                                            <label for="newPayslip" class="mb-1">Input Your New Payslip Password</label>
                                            <input type="text" name="newPayslip" class="form-control mb-2" placeholder="New password" id="newPayslip">
                                        </div>
                                        <div class="retypePassword px-md-5">
                                            <label for="retypePayslip" class="mb-1">Re-type Your New Payslip Password</label>
                                            <input type="text" name="retypePayslip" class="form-control mb-2" placeholder="Retype password" id="retypePayslip">
                                        </div>
                                        <div class="buttonSubmit d-flex mt-5 justify-content-end">
                                            <button type="reset" class="btn btn-light me-3">Reset</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade py-3" id="dataKaryawan" role="tabpanel" aria-labelledby="dataKaryawan-tab">
                                    <form action="#">
                                        <div class="judul px-md-5">
                                            <h5><b>Change Password Account</b></h5>
                                        </div>
                                        <div class="currentPassword px-md-5">
                                            <label for="currentPassowrd" class="mb-1">Input Your Current Password Account</label>
                                            <input type="text" name="currentPassword" class="form-control mb-2" placeholder="Current password" id="currentPassword">
                                        </div>
                                        <div class="newPassword px-md-5">
                                            <label for="newPassword" class="mb-1">Input Your New Password Account</label>
                                            <input type="text" name="newPassword" class="form-control mb-2" placeholder="New password" id="newPassword">
                                        </div>
                                        <div class="retypePassword px-md-5">
                                            <label for="retypePassword" class="mb-1">Re-type Your New Password Account</label>
                                            <input type="text" name="retypePassword" class="form-control mb-2" placeholder="Retype password" id="retypePassword">
                                        </div>
                                        <div class="buttonSubmit d-flex mt-5 justify-content-end">
                                            <button type="reset" class="btn btn-light me-3">Reset</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Akhir Content --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script> 
    </body>
</html>
