@extends('livewire/admin/layouts/master')

@section('judul')
<h1>Pengaturan Galeri</h1>
@endsection

@section('isi')
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
@endsection