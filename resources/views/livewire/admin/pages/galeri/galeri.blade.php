@extends('livewire/admin/layouts/master')

@section('isi')
<section class="section">
    <div class="section-header">
        <h1 class="mr-3">Pengaturan Galeri</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">Tambah Baru</button>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <table id="myTable" class="table table-striped">
                    <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th>Gambar</th>
                        <th>Judul Kegiatan</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="text-center">1</td>
                        <td style="width: 150px"><img src="images/galeri/livereport.png" style="height: 100px"></td>
                        <td>Live Report</td>
                        <td align="center" style="width: 90px;">
                            <button type="button" class="btn btn-table btn-sm btn-primary" title="Edit" data-toggle="modal" data-target="#edit" onclick='edit("1")'><i class="fa fa-pen"></i></button>
                            <button type="button" class="btn btn-table btn-sm btn-primary" title="Foto" data-toggle="modal" data-target="#foto" onclick='foto("1")'><i class="fa fa-camera"></i></button>
                            <button type="button" class="btn btn-table btn-sm btn-danger" title="Hapus" data-toggle="modal" data-target="#hapus" onclick='hapus("1")'><i class="fa fa-times"></i></button>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="create" tabindex="-1" role="dialog" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-pen"></i> Tambah Gambar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <hr>
            <div class="modal-body">
                <form action="/kepengurusan" method="post">
                    <div class="form-group">
                        <p>Judul Kegiatan</p>
                        <input type="text" class="form-control" name="judul">
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

<div class="modal fade" id="edit" tabindex="-1" role="dialog" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-plus"></i> Edit Judul</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <hr>
            <div class="modal-body">
                <form action="/kepengurusan" method="post">
                    <div class="form-group">
                        <p>Judul Kegiatan</p>
                        <input type="text" class="form-control" name="judul">
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

<div class="modal fade" id="foto" tabindex="-1" role="dialog"  style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-pen"></i> <span id="fd">Edit Gambar</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div><hr>
        <div class="modal-body">
        <form class="forms-sample" method="post" enctype="multipart/form-data">
            <div class="form-group">
            <input type="hidden" class="d-none" id="fi" name="i" required>
            <p for="foto">Upload foto :</p>
            <input type="file" class="form-control" id="ff" name="g" required style="height: auto">
            </div><hr>
            <div class="modal-footer p-0 pt-3">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary btn-shadow" name="submit-foto"><i class="fa fa-save"></i><span> Simpan</span></button>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>

<div class="modal fade" id="hapus" tabindex="-1" role="dialog"  style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-times"></i> Hapus Gambar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div><hr>
        <div class="modal-body">
        <form class="forms-sample" method="post">
            <div class="form-group">
            <p id="ht">Apakah anda yakin ingin menghapus gambar ini?</p>
            <input type="hidden" class="d-none" class="form-control" id="hi" name="i" value="" required>
            </div><hr>
            <div class="modal-footer p-0 pt-3">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger btn-shadow" name="submit-hapus"><i class="fa fa-times"></i><span> Hapus</span></button>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection