@extends('user.layout.main')
@section('content')
  @include('user.partials.jumbotron')

  <section id="carousel-logo">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="head-title text-center text-primary-1">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="border-bottom border-5 border-danger my-2">
                <div class="text-lg-head">
                  GANTARI ARTHA
                </div>
              </div>
            </div>
          </div>
          <p class="h3 text-md-head">
            “Berdikari Berkarya Bersama”
          </p>
        </div>
        <div class="logo-center text-center">
            <div class="logo">
                <img src={{ asset('storage/assets/images/logo-bem.png') }} class="img-fluid" >
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <div class="text-md-head text-primary-1 my-5 fw-bold">
                        Griffina, mahluk mitologi bertubuh setengah rajawali dan singa yang melambangkan simbol tanggung jawab, pelindung serta penyeimbang yang merepresentasikan bagaimana peran dari BEM VOKASI UB 2021
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-right">
          <img src={{ asset('storage/assets/images/wave-right.png') }} alt="wave-right">
        </div>
        <div class="wave-left">
          <img src={{ asset('storage/assets/images/wave-left.png') }} alt="wave-right">
        </div>
      </div>
    </div>
  </section>

  <section id="visi-misi">
    <div class="fld-visi text-primary-1">
      <div class="text-center">
        <div class="text-lg-head text-center">
          Visi
        </div>
      </div>
      <div class="col-12 py-5">
        <p class="text-md-head text-center">
          Mewujudkan mahasiswa yang mempunyai jiwa SATRIA (Spiritual, Adaptif, Tanggap, Rasional, Inovatif, dan Aktif)
        </p>
      </div>
      <div class="text-center">
        <div class="text-lg-head text-center">
          Misi
        </div>
      </div>
      <div class="fld-misi">
        <div class="row justify-content-center py-5">
          <div class="col-md-6 col-sm-12">
            <div class="col-md-10 ps-5">
              <ul class="text-primary-1">
                <li class="text-md-head pb-5">Menumbuhan sikap SPIRITUAL pada mahasiswa terhadap dinamika perubahan di
                  dalam dan luar kampus</li>
                <li class="text-md-head pb-5">Mewujudkan mahasiswa yang dapat ber-ADAPTASI dalam perubahan zaman</li>
                <li class="text-md-head pb-5">TANGGAP dalam sinergitas antara mahasiswa dan masyarakat dalam pengabdian
                  untuk menjalankan amanah Tri Dharma perguruan tinggi</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="col-md-10 ms-4 ps-5">
              <ul class="text-primary-1">
                <li class="text-md-head pb-5">Memperluas relasi kepada seluruh civitas akademik serta mengedepankan
                  RASIONALITAS dalam menghadapi tantangan</li>
                <li class="text-md-head pb-5">Mewujudkan mahasiswa yang INOVATIF dalam menumbuhkan kompetensi dibidang
                  akademik maupun non akademik </li>
                <li class="text-md-head pb-5">Mendorong mahasiswa untuk aktif dalam AKSI pergerakan yang dapat membawa
                  perubahan.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('user.partials.slider-proker')
  {{--  --}}
  <section id="organization">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="head-title text-primary-1">
          <div class="text-lg-head">
            KEPENGURUSAN
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="my-5 py-5">
          <img src={{ asset('storage/assets/images/img-leader.png') }} class="img-fluid" alt="ketua-wakil">
        </div>
    </div>
  </section>
  {{--  --}}
  @include('user.partials.gallery')
    <div class="content my-5 py-5">
        <img src={{ asset('storage/assets/images/img-leader.png')}} class="img-fluid" alt="ketua-wakil">
    </div>
    <a href="#" class="btn btn-jumbotron">Selengkapnya</a>
</section>

@include('public.partials.gallery')

<section id="contact-us">
    <div class="head-title my-5 text-primary-1">
        <div class="text-lg-head text-center fw-bold">
            HUBUNGI KAMI
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src={{ asset('storage/assets/images/maps.png') }} class="img-fluid" alt="maps">
            </div>
            <div class="col-md-4">
                <div class="social-media">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-md-head fw-bold py-3">
                            <i class="fab fa-instagram fa-lg icon-sosmed"></i> 
                            @bemvokasiub
                        </li>
                        <li class="list-group-item text-md-head fw-bold py-3">
                            <i class="fab fa-twitter fa-lg icon-sosmed"></i> 
                            @bemvokasiub</li>
                        <li class="list-group-item text-md-head fw-bold py-3">
                            <i class="fab fa-youtube fa-lg icon-sosmed"></i> 
                            @bemvokasiub</li>
                        <li class="list-group-item text-md-head fw-bold py-3">
                            <i class="far fa-envelope fa-lg icon-sosmed"></i> 
                            @bemvokasiub</li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
