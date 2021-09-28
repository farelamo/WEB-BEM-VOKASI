@extends('admin/layouts/master')

@section('isi')
<section class="section">
    <div class="section-header">
        <h1 class="mr-3">Pengaturan User</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">Tambah User</button>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($user as $data)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>
                                            <img alt="" src="assets/img/profil/" class="rounded-circle mr-2 d-inline-block of-cover" width="35" height="35">
                                            {{ $data->name }}
                                        </td>
                                        <td>{{ $data->email }}</td>
                                        <td align="center" style="width: 90px;">
                                            <button type="button" class="btn btn-table btn-sm btn-primary" title="Edit" data-toggle="modal" data-target="#edit" onclick="edit({{ $data->id }})"><i class="fa fa-pen"></i></button>
                                            <button type="button" class="btn btn-table btn-sm btn-primary" title="Foto" data-toggle="modal" data-target="#foto" onclick="foto({{ $data->id }})"><i class="fa fa-camera"></i></button>
                                            <p id="{{ $data->id }}"class="d-none">{{ $data->name }},{{ $data->email }}</p>
                                            <button type="button" class="btn btn-table btn-sm btn-danger" title="Hapus" data-toggle="modal" data-target="#delete" onclick="hapus({{ $data->id }})"><i class="fa fa-times"></i></button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr colspan="3">
                                        <td></td>
                                        <td>No data</td>
                                        <td>No data</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="create" tabindex="-1" role="dialog" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-plus"></i> Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <hr>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <p>Nama :</p>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <p>Email :</p>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <p>Password :</p>
                        <input type="password" class="form-control" name="password">
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
<div class="modal fade" id="edit" tabindex="-1" role="dialog" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-plus"></i> Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <hr>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" class="d-none" id="ei" name="id">
                    <div class="form-group">
                        <p>Nama :</p>
                        <input type="text" class="form-control" id="en" name="name">
                    </div>
                    <div class="form-group">
                        <p>Email :</p>
                        <input type="email" class="form-control" id="ee" name="email">
                    </div>
                    <div class="form-group">
                        <p>Password :</p>
                        <input type="password" class="form-control" name="password">
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
                    <input type="hidden" class="d-none" id="fi" name="id">
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
<div class="modal fade" id="delete" tabindex="-1" role="dialog"  style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-times"></i> Hapus User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div><hr>
            <div class="modal-body">
                <form class="forms-sample" method="post">
                    <div class="form-group">
                        <p id="dt">Apakah anda yakin ingin menghapus user ini?</p>
                        <input type="hidden" class="d-none" class="form-control" id="di" name="id" value="" required>
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
<script>
    function edit(id){
        var data = (document.getElementById(id).textContent).split(",");
        document.getElementById("ei").value = id;
        document.getElementById("en").value = data[0];
        document.getElementById("ee").value = data[1];
    }
    function foto(id){
        document.getElementById("fi").value = id;
    }
    function hapus(id){
        var data = (document.getElementById(id).textContent).split(",");
        document.getElementById("di").value = id;
        document.getElementById("dt").textContent = 'Apakah anda yakin ingin menghapus "'+data[0]+'"?';
    }
</script>
@endsection