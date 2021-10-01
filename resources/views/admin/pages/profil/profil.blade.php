@extends('admin/layouts/master')

@section('isi')
<section class="section">
    <div class="section-header">
        <h1>Profil</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row m-0">
                    <div class="col-md-3 p-md-2 p-5">
                        <div class="avatar-item mb-0">
                            <img alt="image" src="admin/assets/img/profil/{{ Auth::user()->profile_photo_path }}" id="fotoprofil" class="img-fluid" data-toggle="tooltip" title="Foto {{ Auth::user()->name }}" style="width: 100%; object-fit: cover;">
                            <a class="btn btn-icon btn-primary text-white rounded-circle" data-toggle="modal" data-target="#foto" title="Edit Foto" style="position: absolute; bottom: 0; right: 0; height: 50px; width: 50px; font-size: 18px">
                                <i class="fa fa-pen" style="vertical-align: -webkit-baseline-middle;"></i>
                            </a>
                            <!-- <div class="avatar-badge" title="" data-toggle="tooltip" data-original-title="Edit foto"><i class="fas fa-pencil-alt"></i></div> -->
                        </div>
                    </div>
                    <div class="col-md-7 p-md-4">
                        <form action="" method="post">
                            <div class="form-group mb-3">
                                <p>Email</p>
                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <p>Nama</p>
                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required>
                            </div>
                            <div class="row m-0">
                                <button type="submit" class="btn btn-primary btn-shadow ml-auto" name="submit-edit"><i class="fa fa-save"></i><span> Simpan</span></button>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" class="d-none" id="id" name="id" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                        <p>Upload Foto :</p>
                        <input type="file" class="form-control" name="gambar" required style="height: auto">
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
@endsection