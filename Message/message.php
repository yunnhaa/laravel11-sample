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
    <title>Message</title>
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
        <div class="col-12 mx-auto d-flex flex-wrap justify-content-between">
          @include('message_header')
        </div>
        <div class="emailContainer">
            <div class="content col-12 mx-auto bg-white mt-3 p-3">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">INBOX</a>
                            <a class="nav-link" id="v-pills-cuti-tab" data-bs-toggle="pill" href="#v-pills-cuti" role="tab" aria-controls="v-pills-cuti" aria-selected="false">CUTI</a>
                            <a class="nav-link" id="v-pills-overtime-tab" data-bs-toggle="pill" href="#v-pills-overtime" role="tab" aria-controls="v-pills-overtime" aria-selected="false">OVERTIME</a>
                            <a class="nav-link" id="v-pills-sentitem-tab" data-bs-toggle="pill" href="#v-pills-sentitem" role="tab" aria-controls="v-pills-sentitem" aria-selected="false">SENT ITEM</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                @include('message_inbox')
                            </div>
                            <div class="tab-pane fade" id="v-pills-cuti" role="tabpanel" aria-labelledby="v-pills-cuti-tab">
                              @include('message_cuti')
                            </div>
                            <div class="tab-pane fade" id="v-pills-overtime" role="tabpanel" aria-labelledby="v-pills-cuti-overtime">
                              @include('message_overtime')
                            </div>
                            <div class="tab-pane fade" id="v-pills-sentitem" role="tabpanel" aria-labelledby="v-pills-sentitem-tab">
                              @include('message_sentitem')
                            </div>
                        </div>
                    </div>
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
      // Ambil semua tombol bookmark
      var bookmarkButtons = document.querySelectorAll('.contentMail .bi-bookmark');
  
      // Loop melalui setiap tombol bookmark
      bookmarkButtons.forEach(function(button) {
          // Tambahkan event listener untuk saat tombol bookmark diklik
          button.addEventListener('click', function() {
              // Cek apakah tombol bookmark memiliki kelas 'bi-bookmark-fill'
              var isImportant = button.classList.contains('bi-bookmark-fill');
  
              // Jika sudah ditandai sebagai penting, hilangkan kelas 'bi-bookmark-fill' dan tambahkan kelas 'bi-bookmark'
              // Jika belum ditandai sebagai penting, hilangkan kelas 'bi-bookmark' dan tambahkan kelas 'bi-bookmark-fill'
              if (isImportant) {
                  button.classList.remove('bi-bookmark-fill');
                  button.classList.add('bi-bookmark');
              } else {
                  button.classList.remove('bi-bookmark');
                  button.classList.add('bi-bookmark-fill');
              }
          });
      });

    $(document).ready(function() {
    $('#searchEmail').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('.emailContainer tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

$(document).ready(function() {
    $('#searchSentItem').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('.emailContainer tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

$(document).ready(function() {
    $('#searchOvertime').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('.emailContainer tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

$(document).ready(function() {
    $('#searchCuti').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('.emailContainer tbody tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});

$(document).ready(function() {
  $('.dropdown-menu a.dropdown-item').on('click', function() {
        // Ambil teks dari item dropdown yang dipilih
        var filterText = $(this).text().toLowerCase();

        // Ganti teks tombol dropdown sesuai dengan filter yang dipilih
        $('#filterDropdown .btn').html('Filter: ' + filterText + ' <i class="bi bi-filter ms-2"></i>');

        // Filter data sesuai dengan teks filter
        var value = $(this).text().toLowerCase();
        $('.contentMail tbody tr').filter(function() {
            // Tampilkan semua jika filter adalah "All"
            if (value === 'all') {
                $(this).show();
            } else {
                // Sembunyikan atau tampilkan sesuai dengan status email
                var isRead = $(this).find('.bi-envelope-open').length > 0;
                var isUnread = $(this).find('.bi-envelope-fill').length > 0;
                if (value === 'read') {
                    $(this).toggle(isRead);
                } else if (value === 'unread') {
                    $(this).toggle(isUnread);
                }
            }
        });
    });
});

$(document).ready(function() {
    // Fungsi untuk mengatur status checkbox "Select All" berdasarkan baris yang terlihat setelah filter
    function setSelectAllCheckboxStatus() {
        // Periksa apakah semua checkbox di baris yang terlihat terpilih
        var allVisibleChecked = $('.emailContainer tbody tr:visible input[type="checkbox"]').length === $('.emailContainer tbody tr:visible input[type="checkbox"]:checked').length;
        // Ubah status checkbox di th (select all) sesuai dengan hasil periksa di atas
        $('th input[type="checkbox"]').prop('checked', allVisibleChecked);
    }

    // Ketika checkbox di th diubah
    $('th input[type="checkbox"]').on('change', function() {
        // Ambil nilai status checked checkbox
        var isChecked = $(this).prop('checked');
        
        // Periksa apakah checkbox di th adalah yang pertama (select all)
        if ($(this).index() === 0) {
            // Ubah status checked semua checkbox di baris yang terlihat (yang lulus filter)
            $('.emailContainer tbody tr:visible input[type="checkbox"]').prop('checked', isChecked);
        } else {
            // Jika checkbox bukan di th (select all), periksa apakah semua checkbox di baris yang terlihat terpilih
            setSelectAllCheckboxStatus();
        }
    });

    // Ketika checkbox di td diubah
    $('td input[type="checkbox"]').on('change', function() {
        // Periksa apakah semua checkbox di baris yang terlihat terpilih
        setSelectAllCheckboxStatus();
    });

    // Ketika filter dipilih
    $('.dropdown-menu a.dropdown-item').on('click', function() {
        // Ambil teks dari item dropdown yang dipilih
        var filterText = $(this).text().toLowerCase();

        // Ganti teks tombol dropdown sesuai dengan filter yang dipilih
        $('#filterDropdown .btn').html('Filter: ' + filterText + ' <i class="bi bi-filter ms-2"></i>');

        // Filter data sesuai dengan teks filter
        var value = $(this).text().toLowerCase();
        $('.contentMail tbody tr').filter(function() {
            // Tampilkan semua jika filter adalah "All"
            if (value === 'all') {
                $(this).show();
            } else {
                // Sembunyikan atau tampilkan sesuai dengan status email
                var isRead = $(this).find('.bi-envelope-open').length > 0;
                var isUnread = $(this).find('.bi-envelope-fill').length > 0;
                if (value === 'read') {
                    $(this).toggle(isRead);
                } else if (value === 'unread') {
                    $(this).toggle(isUnread);
                }
            }
            // Perbarui status checkbox "Select All" berdasarkan baris yang terlihat setelah filter diterapkan
            setSelectAllCheckboxStatus();
        });
    });
});
  </script>
  
</body>
</html>
