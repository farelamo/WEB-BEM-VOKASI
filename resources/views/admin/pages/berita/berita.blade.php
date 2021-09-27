@extends('admin/layouts/master')

@section('isi')
<section class="section">
    <div class="section-header">
        <h1 style="margin-right: 10px">Berita</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create"
            style="margin-right: 10px">
            Tambah Baru
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
                                        <th>Foto</th>
                                        <th>Judul</th>
                                        <th>Waktu</th>
                                        <th>Tempat</th>
                                        <th>Deksripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($berita as $data)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>

                                        <td class="d-none">{{ $data->id }}</td>
                                        <td><img src="{{ asset('images/berita/'. $data->gambar )}}"
                                                class="thumbnail-table"></td>
                                        <td>{{ $data->judul }}</td>
                                        <td>{{ $data->waktu }}</td>
                                        <td>{{ $data->tempat }}</td>
                                        <td>{{ $data->deskripsi }}</td>
                                        <td align="center" style="width: 90px;">

                                            <a href="#" class="btn btn-table btn-sm btn-primary fa fa-pen edit"></a>
                                            <a href="#" class="btn btn-table btn-sm btn-danger fa fa-times hapus"></a>

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

@include('admin/pages/berita/create')

@if(count($berita) > 0)
@include('admin/pages/berita/edit')
@include('admin/pages/berita/delete')
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
            
            $('#judul').val(data[3]);
            $('#waktu').val(data[4]);
            $('#tempat').val(data[5]);
            $('#deskripsi').val(data[6]);

            $('#edit').attr('action', '/berita/' + data[1]);
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

            $('#hapus').attr('action', '/berita/' + data[1]);
            $('#hapusModal').modal('show');
        })
     })
</script>
@endpush