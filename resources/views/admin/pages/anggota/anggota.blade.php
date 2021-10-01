@extends('admin/layouts/master')

@push('style')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('isi')
<section class="section">
    <div class="section-header">
        <h1 style="margin-right: 10px">Anggota</h1>
        <a href="anggota/create" class="btn btn-primary" style="margin-right: 10px">
            Tambah Baru
        </a>

        {{-- BUTTON TEST SPA --}}

        <!-- <button type="button" class="btn btn-primary" style="margin-right: 10px" 
        data-toggle="collapse" data-target="#buat" aria-expanded="false" aria-controls="collapseExample" id="btntampil" onclick="tampil()">
            Tambah SPA
        </button>

        <button type="button" class="btn btn-primary" style="margin-right: 10px; display: none" 
        data-toggle="collapse" data-target="#buat" aria-expanded="false" aria-controls="collapseExample" onclick="sembunyi()" id="btnsembunyi">
            Tambah SPA
        </button> -->

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#buat" aria-expanded="true" aria-controls="collapseExample">
            Colapse
        </button>

        {{-- END TEST SPA --}}

        @if (Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
        @endif
    </div>

    {{-- TESTING SPA --}}

    <div class="section-body collapse" id="buat">
        <div class="card">
            <div class="card-body">
            <form action="/anggota" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
                    @csrf

                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
                        <div class="invalid-feedback"> <h6>Nama Harus diisi</h6> </div>
                        <div class="text-danger"> @error('nama') {{ $message }} @enderror </div>
                    </div>

                        <div class="form-group">
                        <select class="form-control" name="gender" id="gender" required>
                            <option value="">-- Pilih Gender -- </option>
                            <option value="L">Laki - Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        <div class="invalid-feedback"> <h6>Pilih salah satu gender !!</h6> </div>
                        @error('gender')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="prodi" placeholder="Prodi" required>
                        <div class="invalid-feedback"> <h6>Prodi Harus diisi</h6> </div>
                        <div class="text-danger"> @error('prodi') {{ $message }} @enderror </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan" required>
                        <div class="invalid-feedback"> <h6>Jabatan Harus diisi</h6> </div>
                        <div class="text-danger"> @error('jabatan') {{ $message }} @enderror </div>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="kepengurusan" id="kepengurusan">
                            <option value="">-- Pilih Jenis Kepengurusan -- </option>
                            @foreach ($urus as $item)
                                <option value="{{ $item->id }}" >{{ $item->jenis }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback"> <h6>Kepengurusan Harus diisi</h6> </div>
                        @error('kepengurusan')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <p for="foto">Upload Foto :</p>
                        <input type="file" class="form-control" name="foto" style="height: auto" required>
                        <div class="invalid-feedback"><h6>Foto Harus diisi</h6> </div>
                        <div class="text-danger"> @error('foto') {{ $message }} @enderror </div>
                    </div>

                    <hr>
                    <div class="modal-footer p-0 pt-3">
                        <button type="submit" class="btn btn-primary btn-shadow">
                            <i class="fa fa-check"></i><span> Submit</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- END TESTING SPA --}}

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

                                            <a href="anggota/{{ $data->id }}/edit" class="btn btn-table btn-sm btn-primary"><i class="fa fa-pen"></i></a>
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

<script>
    function tampil(){
        document.getElementById('btntampil').style.display = 'none';
        document.getElementById('btnsembunyi').style.display = 'block';
        document.getElementById('buat').style.display = 'block';
    }

    function sembunyi(){
        document.getElementById('btntampil').style.display = 'block';
        document.getElementById('btnsembunyi').style.display = 'none';
        document.getElementById('buat').style.display = 'none';
    }
    
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endpush