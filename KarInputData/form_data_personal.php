<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        /* Untuk Menghilangkan Arrow pada input type number */
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
        

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col">
            <h5 class="mb-0">Data Pribadi</h5>
             <p class="fw-light">Input Semua Data Pribadi</p>
        </div>
    </div>

    {{-- <form action="proses_input_kar.php" method="POST"> --}}
    <div class="row mb-3">
        <div class="col-12">
        <span><b>Nama</b></span>
        </div>
        <div class="col col-12 col-md-6">
            <input type="text" class="form-control mb-2 mb-md-0" name="nama_depan" placeholder="Nama Depan">
        </div>
        <div class="col col-12 col-md-6">
            <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang">
        </div>
    </div>

    <div class="row">
        <div class="col"><span><b>Email</b></span></div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
    </div>

    <div class="row d-flex align-items-center mb-3">
        <div class="col col-12 col-md-6">
            <span><b>No Handphone</b></span>
            <input type="number" class="form-control mb-2 mb-md-0" name="no_handphone" placeholder="No Handphone" inputmode="numeric">
        </div>
        <div class="col col-12 col-md-6">
            <span><b>No Telepon</b></span>
            <input type="number"  class="form-control" name="no_telepon" placeholder="No Telepon">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col col-12 col-md-6">
            <span><b>Tempat Lahir</b></span>
            <input type="text" class="form-control mb-2 mb-md-0" name="tempat_lahir" placeholder="Tempat Lahir">
        </div>
        <div class="col col-12 col-md-6">
            <span><b>Tanggal Lahir</b></span>
            <input type="date" class="form-control" name="tgl_lahir" placeholder="Tgl Lahir">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col col-12 col-md-6">
        <span><b>Jenis Kelamin</b></span><br>
            <div class="form-check form-check-inline me-2 me-md-5">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                <label class="form-check-label" for="laki-laki">
                    Laki-laki
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                <label class="form-check-label mb-2 mb-md-0" for="perempuan">
                    Perempuan
                </label>
            </div>
        </div>
        <div class="col col-12 col-md-6">
            <span><b>Status</b></span>
            <select class="form-select" name="status_pernikahan" required>
            <option value="" disabled selected hidden>Pilih Status</option>
                <option value="Menikah">Menikah</option>
                <option value="Belum Menikah">Belum Menikah</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col col-12 col-md-6">
            <span><b>Golongan Darah</b></span>
            <select class="form-select mb-2 mb-md-0" name="gol_darah" required>
            <option value="" disabled selected hidden>Pilih Golongan Darah</option>
            <option value="-">-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
        <div class="col col-12 col-md-6">
            <span><b>Agama</b></span>
            <select class="form-select" name="agama" required>
            <option value="" disabled selected hidden>Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
            </select>
        </div>
    </div>

    <div class="row border-top mt-4 py-3">
        <div class="col">
            <h5 class="mb-0 g-0">Identitas dan Alamat</h5>
            <span class="fw-light g-0">Identitas Karyawan dan Alamat</span>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col col-12 col-md-6">
        <span><b>Tipe Identitas</b></span>
            <select class="form-select mb-2 mb-md-0" name="tipe_identitas" required>
            <option value="" disabled selected hidden>Pilih Identitas</option>
                <option value="Islam">Kartu Tanda Penduduk</option>
                <option value="Kristen">Kartu Keluarga</option>
                <option value="Hindu">Kartu Tanda Mahasiswa</option>
            </select>
        </div>
        <div class="col col-12 col-md-6">
            <span><b>Nomor Identitas</b></span>
            <input type="number" class="form-control" name="no_identitas" placeholder="0">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col col-12 col-md-6">
            <span><b>Masa Aktif Identitas</b></span>
            <input type="date" class="form-control mb-2 mb-md-0" name="exp_identitas" placeholder="Exp Identitas">
        </div>
        <div class="col col-12 col-md-6">
            <span><b>Kode Pos</b></span>
            <input type="number" class="form-control" name="kode_pos" placeholder="0">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <span><b>Alamat Identitas</b></span>
            <textarea class="form-control form-control-sm" type="text" rows="3" style="max-height:6rem; min-height:6rem;" name="alamat_identitas"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <span><b>Alamat Rumah</b></span>
            <textarea class="form-control form-control-sm" type="text" rows="3" style="max-height:6rem; min-height:6rem;" name="alamat_rumah"></textarea>
        </div>
    </div>
    {{-- </form> --}}
</body>
</html>