@extends('livewire/admin/layouts/master')

@section('judul')
<h1 style="margin-right: 10px">Kepengurusan</h1>
{{-- <a href="/kepengurusan/create">
    <button class="btn btn-primary">
        Tambah Jenis Kepengurusan
    </button>
</a> --}}

<button wire:click="create()"
    class="btn btn-primary">
    Create Pengurus
</button>
@if($isModalOpen)
<x-jet-nav-link href="{{ route('urus') }}" :active="request()->routeIs('urus')">
    Urus
</x-jet-nav-link>
@include('livewire.admin.kepengurusan.create')
@endif
@endsection

@section('isi')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th>Logo</th>
                                <th>Jenis</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pengurus as $data)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>
                                    <img alt="" src="" class="rounded-circle mr-2 of-cover" width="35" height="35">
                                </td>
                                <td>{{ $data->jenis}}</td>
                                <td>{{ $data->deskripsi}}</td>
                                <td align="center" style="width: 90px;">
                                    <button type="button" class="btn btn-table btn-sm btn-primary" title="Edit"
                                        data-toggle="modal" data-target="#edit" onclick='edit("1")'><i
                                            class="fa fa-pen"></i></button>
                                    <button type="button" class="btn btn-table btn-sm btn-primary" title="Foto"
                                        data-toggle="modal" data-target="#foto" onclick='foto("1")'><i
                                            class="fa fa-camera"></i></button>
                                    <button type="button" class="btn btn-table btn-sm btn-danger" title="Hapus"
                                        data-toggle="modal" data-target="#hapus" onclick='hapus("1")'><i
                                            class="fa fa-times"></i></button>
                                </td>
                            </tr>
                            @empty
                            <tr colspan="3">
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
@endsection