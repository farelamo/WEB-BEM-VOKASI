@extends('admin/layouts/master')

@section('isi')
<section class="section">
    <div class="section-header">
        <h1 style="margin-right: 10px">Form Tambah Anggota</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                    <form action="/anggota" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" maxlength="100" required>
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
                            <input type="text" class="form-control" name="prodi" placeholder="Prodi"  maxlength="255" required>
                            <div class="invalid-feedback"> <h6>Prodi Harus diisi</h6> </div>
                            <div class="text-danger"> @error('prodi') {{ $message }} @enderror </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan" maxlength="50" required>
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
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-shadow">
                                <i class="fa fa-check"></i><span> Submit</span></button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>
@endsection