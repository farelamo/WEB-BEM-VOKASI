@extends('admin/layouts/master')

@section('isi')
<section class="section">
    <div class="section-header">
        <h1 class="mr-3">Pengaturan Admin</h1>
        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">Tambah User</button> --}}
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
                                        <th>Approve</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($user as $data)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>
                                            @if ($data->profile_photo_path != '')
                                                <img alt="" src="{{('images/profil/' . $data->profile_photo_path)}}" class="rounded-circle mr-2 d-inline-block of-cover" width="35" height="35">
                                                @else
                                                <img alt="" src="{{ asset('admin/assets/img/avatar/avatar-1.png')}}" class="rounded-circle mr-2 d-inline-block of-cover" width="35" height="35">
                                            @endif
                                            {{ $data->name }}
                                        </td>
                                        <td>{{ $data->email }}</td>
                                        @if ($data->isApprove == 1)
                                            <td><div class="badge badge-success">Sudah ACC</div></td>
                                        @else
                                            <td><div class="badge badge-danger">Belum di ACC</div></td>
                                        @endif
                                        <td align="center" style="width: 90px;">
                                            <button type="button" class="btn btn-table btn-sm btn-primary" title="Edit" data-toggle="modal" data-target="#edit" onclick="edit({{ $data->id }})"><i class="fa fa-pen"></i></button>
                                            <button type="button" class="btn btn-table btn-sm btn-primary" title="Foto" data-toggle="modal" data-target="#foto" onclick="foto({{ $data->id }})"><i class="fa fa-camera"></i></button>
                                            <p id="{{ $data->id }}"class="d-none">{{ $data->name }},{{ $data->email }}, {{ $data->isApprove }}</p>
                                            <button type="button" class="btn btn-table btn-sm btn-danger" title="Hapus" data-toggle="modal" data-target="#delete" onclick="hapus({{ $data->id }})"><i class="fa fa-times"></i></button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr colspan="3">
                                        <td></td>
                                        <td>No data</td>
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
{{-- <div class="modal fade" id="create" tabindex="-1" role="dialog" style="display: none;" aria-modal="true">
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
                <form method="post" action="/user" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <p>Nama :</p>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <p>Email :</p>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <p>Password :</p>
                        <input type="password" class="form-control" name="password" required>
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
</div> --}}
<div class="modal fade" id="edit" tabindex="-1" role="dialog" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-plus"></i> Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <hr>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" id="editform" novalidate>
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <p>Email :</p>
                        <input type="email" class="form-control" id="ee" name="email">
                    </div>
                    <div class="form-group d-none">
                        <p>Approve </p>
                        <input type="email" class="form-control" id="cc" name="value">
                    </div>
                    <div class="form-group">
                        <div class="control-label">Approve</div>
                        <label class="mt-2">
                          <input type="checkbox" name="acc" class="custom-switch-input" id="cek" onchange="check()">
                          <span class="custom-switch-indicator"></span>
                          <span class="custom-switch-description" id="note"></span>
                        </label>
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
                <form method="post" enctype="multipart/form-data" id="fotoform">
                    @method('PUT')
                    @csrf

                    <input type="hidden" class="d-none" id="fi" name="id">
                    <div class="form-group">
                        <p>Upload Foto :</p>
                        <input type="file" class="form-control" name="foto" required style="height: auto">
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
                <form class="forms-sample" method="post" id="hapusform">
                    @csrf
                    @method('DELETE')

                    <div class="form-group">
                        <p id="dt"></p>
                    </div>
                    <hr>
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
        
        let aksi = document.getElementById("editform").setAttribute("action", "/user/" + id + "edit");
        document.getElementById("ee").value = data[1];
        let cc = document.getElementById("cc").value = data[2];

            let note = document.getElementById("note")
            let att = document.createAttribute("checked");
            let cek = document.getElementById("cek")
            cek.value = data[2]
            cek.setAttributeNode(att)

            if(cek.value == 1){
                cek.checked = true
                note.textContent = 'ACC'
            }else if(cek.value == 0){
                cek.checked = false
                note.textContent = 'Belum ACC'
            }
    }

    function check(){
        let cc = document.getElementById("cc")
        let note = document.getElementById("note")
        if(cek.checked == true){
            note.textContent = 'ACC'
            cc.value = 1
        }else {
            note.textContent = 'Belum ACC'
            cc.value = 0
        }
    }

    function foto(id){
        let aksi = document.getElementById("fotoform").setAttribute("action", "/user/" + id + "edit");
    }
    function hapus(id){
        var data = (document.getElementById(id).textContent).split(",");
        document.getElementById("dt").textContent = 'Apakah anda yakin ingin menghapus "'+data[0]+'"?';
        let aksi = document.getElementById("hapusform").setAttribute("action", "/user/" + id)
    }
</script>
@endsection