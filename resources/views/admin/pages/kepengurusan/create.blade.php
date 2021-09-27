<div class="modal fade" id="create" tabindex="-1" role="dialog" style="display: none;"
aria-modal="true">
<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><i class="fa fa-pen"></i> Tambah Kategori Konten</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <hr>
        <div class="modal-body">
            <form method="post" action="/kepengurusan" enctype="multipart/form-data">
                @csrf    
                <div class="form-group">
                    <p>Judul</p>
                    <input type="text" class="form-control" name="jenis">
                    @error('jenis') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <p>Deskripsi</p>
                    <input type="text" class="form-control" name="deskripsi">
                    @error('deskripsi') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <p for="foto">Upload Gambar :</p>
                    <input type="file" class="form-control" name="files[gambar]" required style="height: auto">
                </div>
                <div class="form-group">
                    <p for="foto">Upload Logo :</p>
                    <input type="file" class="form-control" name="files[logo]" required style="height: auto">
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