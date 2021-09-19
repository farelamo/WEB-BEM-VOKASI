@extends('livewire/admin/layouts/master')

{{-- @include('livewire.update') --}}
@push('style')
    @livewireStyles
    @livewireScripts
@endpush

@section('isi')
<section class="section">
    <div class="section-header">
        <h1 style="margin-right: 10px">Kepengurusan</h1>
        {{-- @include('livewire/admin/pages/kepengurusan/create') --}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
            Create Baru
        </button>
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
                                        <th>Logo</th>
                                        <th>Jenis</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($pengurus as $data)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $data->logo }}</td>
                                            <td>{{ $data->jenis }}</td>
                                            <td>{{ $data->deskripsi }}</td>
                                            <td>{{ $data->gambar }}</td>
                                            <td align="center" style="width: 90px;">
                                                <button type="button" class="btn btn-table btn-sm btn-primary"
                                                    data-toggle="modal" data-target="#updateModal"
                                                    wire:click="edit({{ $data->id }})">
                                                    <i class="fa fa-pen"></i>
                                                </button>
                                                <button type="button" class="btn btn-table btn-sm btn-danger"
                                                    wire:click="delete({{ $data->id }})">
                                                    <i class="fa fa-times"></i>
                                                </button>
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
    </div>
</section>
@endsection

@section('modal')
    {{-- @include('livewire/admin/pages/kepengurusan/create') --}}
    <div class="modal fade" id="create" tabindex="-1" role="dialog" style="display: none;"
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
                <form action="/kepengurusan" method="post">
                    @csrf
                    <div class="form-group">
                        <p>Judul</p>
                        <input type="text" class="form-control" name="jenis">
                        @error('jenis')
                        <label class="text-danger">
                            {{ $message }}
                        </label>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Deskripsi</p>
                        <input type="text" class="form-control" name="deskripsi">
                        @error('deskripsi')
                        <label class="text-danger">
                            {{ $message }}
                        </label>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Logo</p>
                        <input type="text" class="form-control" name="logo">
                        @error('logo')
                        <label class="text-danger">
                            {{ $message }}
                        </label>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Gambar</p>
                        <input type="text" class="form-control" name="gambar">
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
@endsection

@push('script')
    <script>
        window.livewire.on('create', ()=> {
            $('create').modal('hide');
        });
    </script>
@endpush