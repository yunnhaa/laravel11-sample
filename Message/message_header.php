<div class="judul">
    <h3><b>Message</b></h3>
</div>

<div class="newMessage">
    <button type="button" class="btn btn-light border rounded" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square me-2"></i>New Message</button>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New Message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#">
          <div class="penerima">
            <label for="penerimaNew">PENERIMA</label>
            <input type="text" class="form-control" name="penerimaNewMessage" id="penerimaNew">
          </div>
          <div class="subjek">
            <label for="subjekNew">SUBJEK</label>
            <input type="text" class="form-control" name="subjekNewMessage" id="subjekNew">
          </div>
          <div class="deskripsi">
            <label for="deskripsiNew">DESKRIPSI</label>
            <textarea class="form-control" name="deskripsiNewMessage" id="deskripsiNew" style="max-width: 100%; min-width: 100%; min-height:200px; max-height:200px;"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-light border rounded">Reset</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
    </form>
    </div>
  </div>
</div>