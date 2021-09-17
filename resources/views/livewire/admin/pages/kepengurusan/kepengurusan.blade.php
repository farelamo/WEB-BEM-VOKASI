@extends('livewire/admin/layouts/master')

{{-- @include('livewire.update') --}}

@section('judul')
    <h1 style="margin-right: 10px">Kepengurusan</h1>
    @include('livewire/admin/pages/kepengurusan/create')
@endsection

@push('style')
    @livewireStyles
@endpush

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
                                        <td>{{ $data->jenis }}</td>
                                        <td>{{ $data->deskripsi }}</td>
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

    @push('script')
        <script type="text/javascript">
            window.livewire.on('CreateStore', () => {
                $('#create').modal('show');
            });
            
        </script>
    @endpush
@endsection
