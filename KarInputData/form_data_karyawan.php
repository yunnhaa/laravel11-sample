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
            <h5 class="mb-0">Data Karyawan</h5>
            <p class="fw-light">Input Semua Data yang berhubungan dengan Perusahaan</p>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col col col-12 col-md-6">
            <span><b>Id Karyawan</b></span>
            <input type="number" class="form-control mb-2 mb-md-0" name="noid_karyawan" placeholder="Id Karyawan">
        </div>
        <div class="col col col-12 col-md-6">
            <span><b>Barcode</b></span>
            <input type="text" class="form-control" name="barcode" placeholder="Barcode">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col col col-12 col-md-6">
            <span><b>Struktur Grup</b></span>
            <select class="form-select mb-2 mb-md-0" name="struktur_grup" required>
            <option value="" disabled selected hidden>Pilih Struktur Grup</option>
            <option value="-">-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
        <div class="col col col-12 col-md-6">
            <span><b>Status Karyawan</b></span>
            <select class="form-select" name="status_karyawan" required>
            <option value="" disabled selected hidden>Pilih Status Karyawan</option>
            <option value="-">-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <span><b>Tanggal Bergabung</b></span>
            <input type="date" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col col col-12 col-md-6">
            <span><b>Cabang</b></span>
            <select class="form-select mb-2 mb-md-0" name="cabang" required>
            <option value="" disabled selected hidden>Pilih Cabang</option>
            <option value="-">-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
        <div class="col col col-12 col-md-6">
            <span><b>Organisasi</b></span>
            <select class="form-select" name="organisasi" required>
            <option value="" disabled selected hidden>Pilih Organisasi</option>
            <option value="-">-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col col col-12 col-md-6">
            <span><b>Posisi Pekerjaan</b></span>
            <select class="form-select mb-2 mb-md-0" name="posisi_pekerjaan" required>
            <option value="" disabled selected hidden>Pilih Posisi</option>
            <option value="-">-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
        <div class="col col col-12 col-md-6">
            <span><b>Level Pekerjaan</b></span>
            <select class="form-select" name="level_pekerjaan" required>
            <option value="" disabled selected hidden>Pilih Level</option>
            <option value="-">-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col col col-12 col-md-6">
            <span><b>Grade</b></span>
            <select class="form-select mb-2 mb-md-0" name="grade" required>
            <option value="" disabled selected hidden>Pilih Grade</option>
            <option value="-">-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
        <div class="col col col-12 col-md-6">
            <span><b>Class</b></span>
            <select class="form-select" name="organisasi" required>
            <option value="" disabled selected hidden>Pilih Class</option>
            <option value="-">-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <span><b>Jadwal</b></span>
            <select class="form-select" name="organisasi" required>
            <option value="" disabled selected hidden>Pilih Jadwal</option>
            <option value="-">-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col col col-12 col-md-6">
            <span><b>Approval line</b></span>
            <select class="form-select mb-2 mb-md-0" name="approval_line" required>
            <option value="" disabled selected hidden>Pilih Approval line</option>
            <option value="-">-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
        <div class="col col col-12 col-md-6">
            <span><b>Manager</b></span>
            <select class="form-select" name="manager" required>
            <option value="" disabled selected hidden>Pilih Manager</option>
            <option value="-">-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>
    </div>
</body>
</html>