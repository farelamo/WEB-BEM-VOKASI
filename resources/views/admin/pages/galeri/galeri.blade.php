@extends('admin/layouts/master')

@section('isi')
<section class="section">
    <div class="section-header">
        <h1 style="margin-right: 10px">Galeri</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create"
            style="margin-right: 10px">
            Tambah Baru
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
                                        <th class="d-none">ID.</th>
                                        <th>Gambar</th>
                                        <th>Judul Kegiatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($galeri as $data)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>

                                        <td class="d-none">{{ $data->id }}</td>
                                        <td><img src="{{ asset('images/galeri/'. $data->gambar )}}" class="thumbnail-table"></td>
                                        <td>{{ $data->judul_kegiatan }}</td>
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

@include('admin/pages/galeri/create')

@if(count($galeri) > 0)
@include('admin/pages/galeri/edit')
@include('admin/pages/galeri/delete')
@endif

@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {

        var table = $('#myTable').DataTable();

        // editModal
        table.on('click', '.edit', function() {

            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);
            
            $('#judul_kegiatan').val(data[3]);

            $('#edit').attr('action', '/galeri/' + data[1]);
            $('#editModal').modal('show');
        })

        // hapusModal
        table.on('click', '.hapus', function() {

            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);

            document.getElementById('ID').textContent = " Apakah anda yakin ingin menghapus " + data[3] + ' ?';

            $('#hapus').attr('action', '/galeri/' + data[1]);
            $('#hapusModal').modal('show');
        })
     })
</script>
@endpush