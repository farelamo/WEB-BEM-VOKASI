@extends('user.layout.main')

@section('content')
    <!-- <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        Preloader End  -->


    <!--  Header Area Start  -->
    @include('user.partials.header')
    <!--  Header Area End  -->

    <!--  Main Banner Area Start  -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="{{asset('images/motion.mp4')}}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <!-- <h6>Selamat Datang</h6> -->
                <h4>BEM Vokasi <br> <em> Universitas Brawijaya</em> </h4>
                <div class="main-button scroll-to-section">
                    <a href="#tentang">Tentang Kami</a>
                </div>
            </div>
        </div>
    </div>
    <!--  Main Banner Area End  -->

    <!--  Features Item Start  -->
    @include('user.partials.slider-proker')
    <!--  Features Item End  -->


    <!--  Call to Action Start  -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Come and Join US!</h2>
                        <p>Jadilah bagian dari kami, untuk Vokasi Universitas Brawijaya yang lebih maju</p>
                        <div class="main-button scroll-to-section">
                            <a href="#biro-kementerian">Become a member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Call to Action End  -->

    <!--  Our Classes Start  -->
    <section class="section" id="biro-kementerian">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Biro <em>& Kementrian</em></h2>
                        <img src="{{asset('images/line-dec.png')}}" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'><img src="{{asset('images/tabs-first-icon.png')}}" alt="">Biro
                                Administrasi</a>
                        </li>
                        <li><a href='#tabs-2'><img src="{{asset('images/tabs-first-icon.png')}}" alt="">Biro
                                Puskominfo</a></a></li>
                        <li><a href='#tabs-3'><img src="{{asset('images/tabs-first-icon.png')}}" alt="">Kementrian
                                PSDM</a></a></li>
                        <li><a href='#tabs-4'><img src="{{asset('images/tabs-first-icon.png')}}" alt="">Kementrian
                                Pora</a></a></li>
                        <li><a href='#tabs-5'><img src="{{asset('images/tabs-first-icon.png')}}" alt="">Kementrian
                                Perhubungan</a></a></li>
                        <li><a href='#tabs-6'><img src="{{asset('images/tabs-first-icon.png')}}" alt="">Kementrian
                                Sosma</a></a></li>
                        <li><a href='#tabs-7'><img src="{{asset('images/tabs-first-icon.png')}}" alt="">Kementrian
                                Advokesma</a></a></li>
                        <li><a href='#tabs-8'><img src="{{asset('images/tabs-first-icon.png')}}" alt="">Kementrian
                                Kastrat</a></a></li>
                        <!-- <div class="main-rounded-button"><a href="#">View All Schedules</a></div> -->
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="{{asset('images/Admin.png')}}" alt="First Class">
                            <h4>Biro Administrasi</h4>
                            <p>Biro Administrasi memiliki tugas pokok dan fungsi dengan segala hal yang berkaitan dengan
                                administrasi kesekretariatan dan administrasi keuangan demi terciptanya program kerja BEM
                                Vokasi UB yang lebih baik.</p>
                            <div class="main-button">
                                <a href="{{ route('bk.index', ['nama' => 'administrasi']) }}">Learn More</a>
                            </div>
                        </article>
                        <article id='tabs-2'>
                            <img src="{{asset('images/Puskom.png')}}" alt="Second Training">
                            <h4>Biro Puskominfo</h4>
                            <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a
                                velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus
                                nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius
                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            <div class="main-button">
                                <a href="{{ route('bk.index', ['nama' => 'puskominfo']) }}">Learn More</a>
                            </div>
                        </article>
                        <article id='tabs-3'>
                            <img src="{{asset('images/PSDM.png')}}" alt="Third Class">
                            <h4>Kementrian PSDM</h4>
                            <p>PSDM terbagi menjadi 2 yaitu PSDM INTERNAL Yang menaungi pengembangan sumber daya mahasiswa
                                di dalam lingkup BEM Vokasi dan PSDM EKSTERNAL Yang menaungi pengembangan sumber daya
                                mahasiswa dalam lingkup luar BEM Vokasi, termasuk mahasiswa vokasi maupun luar vokasi. Untuk
                                proker PSDM INTERNAL sendiri yaitu Open Recruitmen Staff BEM Vokasi UB, Training
                                Organization Staff BEM Vokasi UB, BEM Of The Month, Open Recruitmen Staff Muda BEM Vokasi
                                UB, Training Organization Staff Muda BEM Vokasi UB, Fun Upgrading, BEM Award dan Firewell
                                Party. Kemudian Proker PSDM EKSTERNAL sendiri yaitu sebagai berikut, PKKMB Vokasi
                                Universitas Brawijaya, Women Of Inspiration, Kunjungan PSDM Lingkar UB, Latihan Keterampilan
                                Manajemen Mahasiswa (LKMM)
                            </p>
                            <div class="main-button">
                                <a href="{{ route('bk.index', ['nama' => 'psdm']) }}">Learn More</a>
                            </div>
                        </article>
                        <article id='tabs-4'>
                            <img src="{{asset('images/Pora.png')}}" alt="Fourth Training">
                            <h4>Kementrian Pora</h4>
                            <p>Kementrian yang bertanggung jawab sebagai fasilitator dalam mengembangkan dan mengoptimalkan
                                minat bakat bidang olahraga, keilmuan, kewirausahaan, dan seni mahasiswa aktif Vokasi UB.
                                Kementrian PORA mendampingi dan menaungi 9 komunitas yang ada di Vokasi UB serta bergerak
                                aktif membangun karakter pemuda yang berbudaya.
                            </p>
                            <div class="main-button">
                                <a href="{{ route('bk.index', ['nama' => 'pora']) }}">Learn More</a>
                            </div>
                        </article>
                        <article id='tabs-5'>
                            <img src="{{asset('images/Perhub.png')}}" alt="Fourth Training">
                            <h4>Kementrian Perhubungan</h4>
                            <p>Perhubungan merupakan kementerian yang digadang sebagai garda terdepan BEM Vokasi Universitas
                                Brawijaya untuk berlangsungnya relasi terhadap pihak internal maupun eksternal agar
                                terciptanya kesinergisan dan keharmonisan.
                            </p>
                            <div class="main-button">
                                <a href="{{ route('bk.index', ['nama' => 'perhubungan']) }}">Learn More</a>
                            </div>
                        </article>
                        <article id='tabs-6'>
                            <img src="{{asset('images/SOSMA.png')}}" alt="Fourth Training">
                            <h4>Kementrian Sosma</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget
                                venenatis ipsum commodo et.</p>
                            <div class="main-button">
                                <a href="{{ route('bk.index', ['nama' => 'sosma']) }}">Learn More</a>
                            </div>
                        </article>
                        <article id='tabs-7'>
                            <img src="{{asset('images/SOSMA.png')}}" alt="Fourth Training">
                            <h4>Advokesma</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget
                                venenatis ipsum commodo et.</p>
                            <div class="main-button">
                                <a href="{{ route('bk.index', ['nama' => 'advokesma']) }}">Learn More</a>
                            </div>
                        </article>
                        <article id='tabs-8'>
                            <img src="{{asset('images/Kastrat.png')}}" alt="Fourth Training">
                            <h4>Kementrian Kastrat</h4>
                            <p>Kementerian Kajian dan Aksi Strategis (KASTRAT) adalah suatu kementerian yang berada di bawah
                                bidang Sosial-Politik BEM VOKASI 2021. Kementerian ini bertanggung jawab atas fungsi
                                Pengkajian, Pengakaran dan Penyikapan isu-isu politik yang berkembang di Nasional maupun
                                Regional secara umum dan lingkup kampus serta Vokasi secara khusus. Kementerian ini juga
                                menjadi kementerian yang bertanggung jawab atas terciptanya pergerakan perempuan dalam
                                segala bidang termasuk pula dalam hal pencerdasan dan pengimplementasian kesetaraan gender.
                            </p>
                            <div class="main-button">
                                <a href="{{ route('bk.index', ['nama' => 'kastrat']) }}">Learn More</a>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!--  Our Classes End  -->

    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Timeline <em>Proker</em></h2>
                        <img src="{{asset('images/line-dec.png')}}" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Biro Administrsi</li>
                            <li data-tsfilter="tuesday">Biro Puskom</li>
                            <li data-tsfilter="wednesday">Kementrian PSDM</li>
                            <li data-tsfilter="thursday">Kementrian Pora</li>
                            <li data-tsfilter="friday">Kementrian Perhubungan</li>
                            <li data-tsfilter="friday">Kementrian Advokesma</li>
                            <li data-tsfilter="friday">Kementrian Sosma</li>
                            <li data-tsfilter="friday">Kementrian Kastrat</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">Fitness Class</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Muscle Training</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                    <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">
                                        2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Body Building</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Yoga Training Class</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                    <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Advanced Training</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Testimonials Starts  -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>BPI </h2>
                        <img src="{{asset('images/line-dec.png')}}" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor,
                            ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('images/Khosy.png')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Presiden</span>
                            <h4>Khosy Zufar Annaafi</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan
                                church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="trainer-item card h-100">
                        <div class="image-thumb">
                            <img src="{{asset('images/allya.png')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Wakil Presiden</span>
                            <h4>Aliyya Zara Edwina Kakiay</h4>
                            <p>Wakil Presiden BEM merupakan sebuah jabatan satu tingkat dibawah Presiden BEM yang memiliki
                                kualitas tindakannya sama dengan Presiden BEM. </p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('images/harun.png')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Menko Kepemudaan</span>
                            <h4>Moch Mahfuth Harun</h4>
                            <p>Mengkoordinasikan penyusunan dan penyiapan kegiatan serta pengawasan kegiatan‑kegiatan di
                                bidang kepemudaan yang terdiri dari kementrian PSDM dan PORA</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('images/rimba.png')}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>Menko Sosial & Politik</span>
                            <h4>Rimba Febriyan Ananda Putra</h4>
                            <p>Bitters cliche tattooed 8-bit distillery mustache. Keytar succulents gluten-free vegan
                                church-key pour-over seitan flannel.</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Testimonials Ends  -->

    <!--  Contact Us Area Starts  -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1975.7096123109063!2d112.6160192!3d-7.9555553!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78836564ffe905%3A0xa23e714224e7efe3!2sGedung%20Pendidikan%20Vokasi%20Universitas%20Brawijaya!5e0!3m2!1sid!2sid!4v1632881197114!5m2!1sid!2sid"
                            width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <div class="social-media">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item fw-bold py-3">
                                    <i class="fa bg-danger rounded-pill p-2 text-white fa-instagram fa-lg icon-sosmed"></i>
                                    @bemvokasiub
                                </li>
                                <li class="list-group-item fw-bold py-3">
                                    <i class="fa bg-danger rounded-pill p-2 text-white fa-twitter fa-lg icon-sosmed"></i>
                                    @bemvokasiub
                                </li>
                                <li class="list-group-item fw-bold py-3">
                                    <i class="fa bg-danger rounded-pill p-2 text-white fa-youtube fa-lg icon-sosmed"></i>
                                    @bemvokasiub
                                </li>
                                <li class="list-group-item fw-bold py-3">
                                    <i class="fa bg-danger rounded-pill p-2 text-white fa-envelope icon-sosmed"></i>
                                    @bemvokasiub
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Contact Us Area Ends  -->

    @include('user.partials.footer')
@endsection