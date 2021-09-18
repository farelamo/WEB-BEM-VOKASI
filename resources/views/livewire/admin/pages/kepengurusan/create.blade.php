<div wire:ignore.self class="modal fade" id="create" tabindex="-1" role="dialog" style="display: none;"
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
                <form wire:submit.prevent="simpan">
                    <div class="form-group">
                        <p>Judul</p>
                        <input type="text" class="form-control" wire:model="jenis" name="jenis">
                        @error('jenis')
                        <label class="text-danger">
                            {{ $message }}
                        </label>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Deskripsi</p>
                        <input type="text" class="form-control" wire:model="deskripsi" name="deskripsi">
                        @error('deskripsi')
                        <label class="text-danger">
                            {{ $message }}
                        </label>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Logo</p>
                        <input type="text" class="form-control" wire:model="logo" name="logo">
                        @error('logo')
                        <label class="text-danger">
                            {{ $message }}
                        </label>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Gambar</p>
                        <input type="text" class="form-control" wire:model="gambar" name="gambar">
                        @error('gambar')
                        <label class="text-danger">
                            {{ $message }}
                        </label>
                        @enderror
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
