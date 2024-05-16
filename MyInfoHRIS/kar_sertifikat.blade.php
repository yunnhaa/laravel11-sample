<div class="container-fluid">
    <div class="pathNavigasi col-12">
        <p class="text-primary mb-0">Employees / Kim Ga Eul / General</p>
        <h2><b>Sertifikat</b></h2>
    </div>
    <div class="addNew col-12 mb-1 d-flex flex-wrap justify-content-between">
        <div class="jenisSertifikat1 mb-3 col-12 col-sm-auto">
            <select class="form-select" id="jenisSertifikat" aria-label="Default select example">
                <option selected>Pilih Jenis Sertifikat</option>
                <option value="1">Kompetensi</option>
                <option value="2">Ijazah</option>
                <option value="3">MCU</option>
              </select>
        </div>
        <div class="tombol mb-3 col-12 col-sm-auto">
            <button type="button" class="btn btn-primary col-12 col-md-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Sertifikat
            </button>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Sertifikat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                    <div class="namaSertifikat">
                        <label for="namaSertifikat">Nama Sertifikat</label>
                        <input type="text" class="form-control" name="namasertfikat" id="namasertifikat">
                    </div>
                    <div class="jenisSertifikat mt-2">
                        <label for="jenisSertifikat">Jenis Sertifikat</label>
                        <select class="form-select" id="jenisSertifikat" aria-label="Default select example">
                            <option selected>Pilih Jenis Sertifikat</option>
                            <option value="1">Kompetensi</option>
                            <option value="2">Ijazah</option>
                            <option value="3">MCU</option>
                          </select>
                    </div>
                    <div class="masaBerlakuSertifikat mt-2 d-flex flex-wrap justify-content-between">
                        <div class="awalSertifikat col-12">
                            <label for="awalSertifikat">Mulai Berlaku Sertifikat</label>
                            <input type="date" class="form-control" name="awalsertifikat" id="awalSertifikat">
                        </div>
                        <div class="akhirSertifikat col-12 mt-2">
                            <label for="akhirSertifikat">Habis Berlaku Sertifikat</label>
                            <input type="date" class="form-control" name="akhirsertifikat" id="akhirSertifikat">
                        </div>
                    </div>
                    <div class="pilihFile mt-2">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pilih File Sertifikat</label>
                            <input class="form-control" type="file" id="formFile">
                          </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="reset" class="btn btn-light">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>

    <div class="tableSertifikat">
        <div class="table-responsive pb-5">
            <table id="example" class="table table-striped" style="margin-bottom: 5rem">
                <thead>
                    <tr>
                        <th>Nama Sertifikat</th>
                        <th>Jenis Sertifikat</th>
                        <th>Mulai Berlaku</th>
                        <th>Habis Berlaku</th>
                        <th>Masa Berlaku</th>
                        <th>File</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Data Analyst</td>
                        <td>Kompetensi</td>
                        <td>14 Mei 2021</td>
                        <td>14 Mei 2024</td>
                        <td>3 Tahun</td>
                        <td><a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#fileModal">file.png</a></td>
                        
                        <div class="modal fade" id="fileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">File Sertifikat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="sertifikatFile col-12 mb-3" id="sertifikatFile">
                                        <p class="mb-0"><b>Download File</b></p>
                                        <a href="sertifikat/sertifikat1.png" id="downloadLink" class="btn btn-light col-12 d-flex flex-wrap justify-content-between" download>
                                            <span id="fileName" class="me-3"></span><i class="bi bi-download"></i>
                                        </a>
                                    </div>                                    
                                    <div class="fotoSertifikat col-12 file-container" id="fileContainer" style="padding-bottom: 9rem">
                                        {{-- javascript foto/pdf --}}
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                        
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn bg-primary shadow-sm text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Actions
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>