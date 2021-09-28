@extends('admin/layouts/master')

@section('isi')
<section class="section">
    <div class="section-header">
        <h1 style="margin-right: 10px">Kepengurusan</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create"
            style="margin-right: 10px">
            Tambah Kepengurusan
        </button>
        @if (Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
        @endif
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
                                        <th class="d-none">ID.</th>
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

                                        <td class="d-none">{{ $data->id }}</td>
                                        <td><img src="{{ asset('images/kepengurusan/logo/'. $data->logo )}}" class="thumbnail-table"></td>
                                        <td><img src="{{ asset('images/kepengurusan/gambar/'. $data->gambar )}}" class="thumbnail-table"></td>
                                        <td>{{ $data->jenis }}</td>
                                        <td>{{ $data->deskripsi }}</td>
                                        <td align="center" style="width: 90px;">

                                            <a href="#" class="btn btn-table btn-sm btn-primary edit"><i class="fa fa-pen"></i></a>
                                            <a href="#" class="btn btn-table btn-sm btn-danger hapus"><i class="fa fa-times"></i></a>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr colspan="3">
                                        <td></td>
                                        <td>No data</td>
                                        <td>No data</td>
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
@endsection

@section('modal')

@include('admin/pages/kepengurusan/create')

@if(count($pengurus) > 0)
    @include('admin/pages/kepengurusan/edit')
    @include('admin/pages/kepengurusan/delete')
@endif

@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {

        var table = $('#myTable').DataTable();

        table.on('click', '.edit', function() {

            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);

            $('#jenis').val(data[4]);
            $('#deskripsi').val(data[5]);

            $('#edit').attr('action', '/kepengurusan/' + data[1]);
            $('#editModal').modal('show');
        })

        table.on('click', '.hapus', function() {

            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);

            document.getElementById('ID').textContent = " Apakah anda yakin ingin menghapus " + data[4] + ' ?';

            $('#hapus').attr('action', '/kepengurusan/' + data[1]);
            $('#hapusModal').modal('show');
        })
     })
</script>
@endpush