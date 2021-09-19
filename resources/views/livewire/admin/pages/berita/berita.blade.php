@extends('livewire/admin/layouts/master')

@section('isi')
<section class="section">
    <div class="section-header">
        <h1 class="mr-3">Pengaturan Barita</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">Tambah Berita</button>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <table id="myTable" class="table table-striped">
                    <thead>
                    <tr>
                        <th width="5%">No.</th>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="text-center">1</td>
                        <td><img src="images/berita/zoo.jpg" class="thumbnail-table"></td>
                        <td>Surat Edaran Perkuliahan Tahun Akademik 2021/2022</td>
                        <td>2021-09-16</td>
                        <td>Malang</td>
                        <td>Ini Deskripsi</td>
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
@endsection