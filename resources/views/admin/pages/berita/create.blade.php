<div class="modal fade" id="create" tabindex="-1" role="dialog" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-plus"></i> Tambah Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <hr>
            <div class="modal-body">
                <form action="/berita" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <p>Judul</p>
                        <input type="text" class="form-control" name="judul" required>
                        @error('judul') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-calendar"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control daterange" name="waktu" required>
                          @error('waktu') <span class="error">{{ $message }}</span> @enderror
                        </div>
                      </div>

                    <div class="form-group">
                        <p>Tempat </p>
                        <input type="text" class="form-control" name="tempat" required>
                        @error('tempat') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <p>Deskripsi</p>
                        <input type="text" class="form-control" name="deskripsi" required> 
                        @error('deskripsi') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <p for="foto">Upload Foto :</p>
                        <input type="file" class="form-control" name="gambar" required style="height: auto">
                    </div>
                    
                    <hr>
                    <div class="modal-footer p-0 pt-3">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-shadow">
                            <i class="fa fa-check"></i><span> Submit</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>