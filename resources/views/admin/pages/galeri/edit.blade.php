<div class="modal fade" id="editModal" tabindex="-1" role="dialog" style="display: none;"
aria-modal="true">
<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"><i class="fa fa-pen"></i> Edit Galeri</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <hr>
        <div class="modal-body">
            <form method="post" id="edit" enctype="multipart/form-data">
                @csrf    
               @method('PUT')
                <div class="form-group">
                    <p>Judul</p>
                    <input type="text" class="form-control" name="judul" id="judul_kegiatan"  maxlength="100" required>
                    @error('judul_kegiatan') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <p for="foto">Edit foto :</p>
                    <input type="file" class="form-control" name="gambar" style="height: auto" >
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