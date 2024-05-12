<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- ICON -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="row vh-100 g-0">

        <!-- Bagian Kiri -->
        <div class="col-lg-6 position-relative d-none d-lg-block">
            <div class='bg-holder' style='background-image: url(img/loginbg.jpg)'></div>
        </div>
        <!-- BagianKiriAkhir  -->

        <!-- Bagian Kanan -->
        <div class="col-lg-6">
            <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sm-0">
                <div class="col col-sm-6 col-lg-7 col-xl-6">
                    <!-- Logo -->
                    <a href="#" class='d-flex justify-content-center mb-4'>
                        <img src="img/logo.png" alt="">
                    </a>
                    <!-- LogoAkhir -->

                    <div class='text-center mb-5'>
                        <h3 class='fw-bold'>PT MEDIKA PRAKARSA</h3>
                        <p class='text-secondary'>Occupational Health & Industrial Hygine<br>(OHIH)</p>
                    </div>

                    <!-- Divider -->
                    <div class="position-relative">
                        <hr class="text-secondary">
                    </div>
                    <!-- DividerAkhir -->

                   <!-- Form -->
                    <form action="" method="POST">
                        <!-- Tambahkan div untuk menampilkan pesan kesalahan -->
                        <?php if(isset($error)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        <?php endif; ?>
                        <div class="input-group mb-3">
                            <span class='input-group-text'>
                                <i class='bx bxs-user'></i>
                            </span>
                            <input type="text" class='form-control form-control-lg fs-6' placeholder='username' name='username' required>
                        </div>
                        <div class="input-group mb-3">
                            <span class='input-group-text'>
                                <i class='bx bxs-lock-alt' ></i>
                            </span>
                            <input type="password" class='form-control form-control-lg fs-6' placeholder='password' name='password' required>
                        </div>
                        <div class="input-group mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class='form-check-input' id='formCheck'>
                                <label for="formCheck" class='form-check-label text-secondary'><small>Ingat Saya</small></label>
                            </div>
                            <div>
                                <small><a href="#">Lupa Password?</a></small>
                            </div>
                        </div>
                        <a href="dashboard.php">Masuk</a>
                    </form>
                    <!-- FormAkhir -->
                </div>
            </div>
        </div>
        <!-- BagianKananAkhir -->
    </div>
</body>
</html>
