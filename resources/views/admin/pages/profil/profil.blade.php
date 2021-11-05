@extends('admin/layouts/master')

@section('isi')
<section class="section">
    <div class="section-header">
        <h1>Profil</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row m-0">
                    <div class="col-md-3 p-md-2 p-5">
                        <div class="avatar-item mb-0">
                            <img alt="image" 
                            
                            @if(Auth::user()->profile_photo_path != '')
                                src="{{ asset('images/profil/' . Auth::user()->profile_photo_path)}}"
                            @else
                                src="{{ asset('admin/assets/img/avatar/avatar-1.png')}}"
                            @endif

                            id="fotoprofil" class="img-fluid" data-toggle="tooltip" title="Foto
                            {{ Auth::user()->name }}" style="width: 100%; object-fit: cover;">
                            <a class="btn btn-icon btn-primary text-white rounded-circle" data-toggle="modal"
                                data-target="#foto" title="Edit Foto"
                                style="position: absolute; bottom: 0; right: 0; height: 50px; width: 50px; font-size: 18px">
                                <i class="fa fa-pen" style="vertical-align: -webkit-baseline-middle;"></i>
                            </a>
                            <!-- <div class="avatar-badge" title="" data-toggle="tooltip" data-original-title="Edit foto"><i class="fas fa-pencil-alt"></i></div> -->
                        </div>
                    </div>
                    <div class="col-md-7 p-md-4">
                        <form action="profil/{{ Auth::user()->id }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group mb-3">
                                <p>Email</p>
                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" maxlength="100" required>
                            </div>
                            <div class="form-group mb-3">
                                <p>Nama</p>
                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" maxlength="100" required>
                            </div>
                            <div class="row m-0">
                                <button type="submit" class="btn btn-primary btn-shadow ml-auto" name="submit-edit"><i
                                        class="fa fa-save"></i><span> Simpan</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('modal')
    @include('admin/pages/profil/foto')
@endsection

@push('scripts')
<script type="text/javascript">
    function setHeight(){
      var width = document.getElementById('fotoprofil').clientWidth;
      document.getElementById('fotoprofil').style.height = width+"px";
    }  
    setHeight();
  </script>
@endpush