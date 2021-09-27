@extends('admin/layouts/master')

@section('isi')
<section class="section">
    <div class="section-header">
        <h1 style="margin-right: 10px">anggota</h1>
        <a href="anggota/create" class="btn btn-primary" style="margin-right: 10px">
            Tambah Baru
        </a>
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
                                        <th>Nama</th>
                                        <th>Prodi</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($anggota as $data)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>

                                        <td class="d-none">{{ $data->id }}</td>
                                        <td><img src="{{ asset('images/anggota/'. $data->foto )}}" class="thumbnail-table"></td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->prodi }}</td>
                                        <td>{{ $data->jabatan }}</td>
                                        <td align="center" style="width: 90px;">

                                            <a href="anggota/{{ $data->id }}/edit" class="btn btn-table btn-sm btn-primary fa fa-pen"></a>
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

@if(count($anggota) > 0)
@include('admin/pages/anggota/delete')
@endif

@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {

        var table = $('#myTable').DataTable();

        // hapusModal
        table.on('click', '.hapus', function() {

            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);

            document.getElementById('ID').textContent = " Apakah anda yakin ingin menghapus " + data[3] + ' ?';

            $('#hapus').attr('action', '/anggota/' + data[1]);
            $('#hapusModal').modal('show');
        })
     })
</script>
@endpush