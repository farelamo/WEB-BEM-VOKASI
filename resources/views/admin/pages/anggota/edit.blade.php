@extends('admin/layouts/master')

@section('isi')
<section class="section">
    <div class="section-header">
        <h1 style="margin-right: 10px">Form Edit Anggota</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                    <form action="/anggota/{{ $eanggota->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" value="{{ $eanggota->nama }}" placeholder="Masukkan Nama">
                            <div class="text-danger"> @error('nama') {{ $message }} @enderror </div>
                        </div>

                          <div class="form-group">
                            <select class="form-control" name="gender" id="gender">
                                <option value="">-- Pilih Gender -- </option>
                                {{-- <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option> --}}
                                @foreach ($anggota as $item)
                                @if ($item->gender === $eanggota->gender)
                                <option value="{{ $item->gender }}" selected>{{ $item->gender }}</option>
                                @else
                                <option value="{{ $item->gender }}">{{ $item->gender }}</option>
                                @endif
                            @endforeach
                            </select>
                            <div class="invalid-feedback"> <h6>Pilih salah satu gender !!</h6> </div>
                            @error('gender')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="prodi" value="{{ $eanggota->prodi }}" placeholder="Prodi">
                            <div class="text-danger"> @error('prodi') {{ $message }} @enderror </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="jabatan" value="{{ $eanggota->jabatan }}" placeholder="Masukkan Jabatan">
                            <div class="text-danger"> @error('jabatan') {{ $message }} @enderror </div>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="kepengurusan" id="kepengurusan">
                                <option value="">-- Pilih Jenis Kepengurusan -- </option>
                                @foreach ($urus as $item)
                                    @if ($item->id === $eanggota->jenis_kepengurusan_id)
                                    <option value="{{ $item->id }}" selected>{{ $item->jenis }}</option>
                                    @else
                                    <option value="{{ $item->id }}">{{ $item->jenis }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('kepengurusan')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <p for="foto">Upload Foto :</p>
                            <input type="file" class="form-control" name="foto" style="height: auto">
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
@endsection