<div class="kolom1 d-lg-flex">
    <div class="kolom1Menu2 mb-2">
        <div class="p-1 border rounded-3">
            <select class="form-select border-0" aria-label="Default select example" style="padding-right: 8.5rem">
              <option selected>Filter (1)</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
    </div>
</div>
<div class="kolom2 d-flex flex-wrap justify-content-between">
  <div class="kolom2Menu1 mb-2 col-12 col-md-3">
    <div class="tools d-flex justify-content-between px-0 px-lg-3">
        <div class="import">
            <button class="btn fs-6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-download fs-4" data-bs-toggle="tooltip" data-bs-placement="top" title="Import"></i>
            </button>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Import Data Karyawan</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="judul mb-2 ps-1">
                        <span><b>Download dan Lengkapi data sesuai template di bawah.</b></span>
                    </div>
                    <div class="templateFile col-12">
                        <a href="excel/Template_Bulk_Add_Employee.xlsx" id="downloadLink" class="btn btn-light col-12 d-flex flex-wrap justify-content-between">
                            <span id="fileName" class="me-3"></span><i class="bi bi-download"></i>
                        </a>
                    </div>
                    <div class="perhatian pt-2 ps-1">
                        <span><b>Catatan :</b></span>
                        <br>
                        <span>1. ID Karyawan belum pernah digunakan.</span>
                        <br>
                        <span>2. Sudah melengkapi Data Perusahan, Posisi Pekerjaan dll.</span>
                        <br>
                        <span>3. Baca instruksi yang ada di spreadsheet.</span>
                        <br>
                        <span>4. Periksa opsi yang tersedia pada "InformationData".</span>
                    </div>
                <form action="#">
                    <div class="unggahFile pt-3">
                        <label for="formFile" class="form-label"><b>Upload File</b></label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                    <div class="modal-footer">
                    <button type="reset" class="btn btn-light">Reset</button>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
              </div>
            </div>
          </div>

        <div class="export">
            <button class="btn fs-6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                <i class="bi bi-upload fs-4" data-bs-toggle="tooltip" data-bs-placement="top" title="Export"></i>
            </button>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Export Data Karyawan</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#">
                <div class="modal-body">
                    <div class="mb-1">
                        <span>Kontrak Karyawan</span>
                    </div>
                    <div class="mb-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>

                    <div class="mb-1">
                        <span>Cabang</span>
                    </div>
                    <div class="mb-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>

                    <div class="mb-1">
                        <span>Organisasi</span>
                    </div>
                    <div class="mb-2">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>

                    <div class="mb-1">
                        <span>Data Karyawan</span>
                    </div>
                    <div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-light">Reset</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
<div class="search col-12 col-md-auto">
    <input id="searchInput" class="form-control" type="search" placeholder="Search" aria-label="Search">
</div>
</div>