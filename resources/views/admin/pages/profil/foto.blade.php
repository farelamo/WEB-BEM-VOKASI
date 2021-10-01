<div class="modal fade" id="foto" tabindex="-1" role="dialog" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-camera"></i> Edit foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <hr>
            <div class="modal-body">
                <form action="profil/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf 
                    {{-- <input type="hidden" class="d-none" id="id" name="id" value="{{ Auth::user()->id }}"> --}}
                    <div class="form-group">
                        <p>Upload Foto :</p>
                        <input type="file" class="form-control" name="photo" required style="height: auto">
                    </div>
                    <hr>
                    <div class="modal-footer p-0 pt-3">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-shadow">
                            <i class="fa fa-check"></i><span> Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>