@extends('home.index')
@section('activehome','active')
@section('titlepage','Home')

@section('content')
<?php $current = Date('Y'); $born = 2000; $count= $current-$born; ?>

<!-- Modal -->
@if($popup ?? '')
<div class="modal-on-load" data-target="#popupModal"></div>
<div class="modal1 mfp-hide" id="popupModal">
    <div class="block mx-auto" style="background-color: #FFF; max-width: 700px;">
        <div class="center" style="padding: 50px;">
            <h3>{{$popup->title}}</h3>
            <img src="{{$popup->url}}" alt="{{$popup->title}}">
        </div>
    </div>
</div>
@endif
<section id="slider" class="slider-element dark swiper_wrapper slider-parallax min-vh-50" style="overflow: visible">
    <div class="slider-inner">
        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption">
                            <div>
                                <h2 class="nott" data-animate="fadeInUp">We are <br>BTSA LOGISTICS</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-bg"
                        style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.5)), url('{!!asset('webpage/demos/btsa/images/slider/1.jpg')!!}') no-repeat center center; background-size: cover;">
                    </div>
                </div>
                <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption">
                            <div>
                                <h2 class="nott" data-animate="fadeInUp">Your Reliable <br>Logistics Partner
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide-bg"
                        style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.5)), url('{!!asset('webpage/demos/btsa/images/slider/2.jpeg')!!}') no-repeat center center; background-size: cover;">
                    </div>
                </div>
            </div>
            <div class="swiper-navs">
                <div class="slider-arrow-left"><i class="icon-line-arrow-left"></i></div>
                <div class="slider-arrow-right"><i class="icon-line-arrow-right"></i></div>
            </div>
            <div class="swiper-scrollbar">
                <div class="swiper-scrollbar-drag">
                    <div class="slide-number">
                        <div class="slide-number-current"></div><span>/</span>
                        <div class="slide-number-total"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap py-0" style="overflow: visible">

        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1382 58" width="100%" height="60"
            preserveAspectRatio="none" style="position: absolute; top: -58px; left:0; z-index: 1">
            <path style="fill:#FFF;" d="M1.52.62s802.13,127,1380,0v56H.51Z" /></svg>

        <div class="container">

            <div class="slider-feature w-100">
                <div class="row justify-content-center">
                    {{-- <div class="col-md-6 px-1">
                        <a href="/trace-track"
                            class="card center border-left-0 border-right-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 font-weight-semibold text-uppercase ls1">
                            <div class="card-body">
                                <i class="icon-line-map-pin"></i>Track Your Shipment
                            </div>
                        </a>
                    </div> --}}
                    <div class="col-md-6 px-1">
                        <a data-toggle="modal" data-target="#companyview"
                            class="card center border-left-0 border-right-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 font-weight-semibold text-uppercase ls1">
                            <div class="card-body">
                                <i class="icon-line-mail"></i>Company Profile
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="section mt-3"
            style="background: #FFF url('{!!asset('webpage/demos/btsa/images/others/1.jpg')!!}') no-repeat 100% 50% / auto 100%;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 center">
                        <div class="heading-block border-bottom-0 mb-4">
                            <h2 class="mb-4 nott">Siapa kami?</h2>
                        </div>
                        <div class="svg-line bottommargin-sm clearfix">
                            <img src="{!!asset('webpage/demos/btsa/images/divider-1.svg')!!}" alt="svg divider"
                                height="20">
                        </div>
                        <p><strong>Kami adalah perusahaan
                                BTSA LOGISTICS.</strong><br>
                            Didirikan pada tahun 2000, BTSA Logistics telah menjadi salah satu perusahaan jasa
                            ekspedisi di Indonesia.
                            Saat ini kami terdiri dari 4 departemen : <i>Domestic</i>, <i>Export</i>,
                            <i>Import</i> dan
                            <i>Trucking</i>.
                            BTSA Logistics tergabung dalam <strong>PT. Berlian Tangguh Sejahtera</strong> untuk
                            legalitas
                            departemen Domestic
                            dan <strong>PT. Berlian Transtar Abadi</strong> untuk legalitas departemen Export,
                            Import dan
                            Trucking.</p>
                    </div>
                </div>
                <div class="row mt-5 col-mb-50 mb-0">
                    <div class="col-md-4">
                        <div class="feature-box flex-column pl-0">
                            <div class="fbox-media position-relative">
                                <img src="{!!asset('webpage/demos/btsa/images/icons/wreath.svg')!!}" alt="Featured Icon"
                                    width="60" class="mb-3">
                            </div>
                            <div class="fbox-content px-0">
                                <h3 class="nott ls0"><a class="text-dark">Visi Kami</a></h3>
                                <p>Menjadi perusahaan ekspedisi terpercaya di Indonesia.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature-box flex-column pl-0">
                            <div class="fbox-media position-relative">
                                <img src="{!!asset('webpage/demos/btsa/images/icons/target.svg')!!}" alt="Featured Icon"
                                    width="60" class="mb-3">
                            </div>
                            <div class="fbox-content px-0">
                                <h3 class="nott ls0"><a class="text-dark">Misi Kami.</a></h3>
                                <p>1. Mempersiapkan SDM yang berkompeten di bidangnya serta berintegritas
                                    tinggi.<br>
                                    2. Memberikan pelayanan prima seperti kecepatan, keamanan dan keselamatan
                                    pengiriman barang.<br>
                                    3. Senantiasa menyampaikan informasi serta solusi kreatif untuk memecahkan
                                    masalah pelanggan.<br>
                                    4. Berupaya menghasilkan / menciptakan efisiensi dan efektifitas bersama
                                    pelanggan dan mitra usaha
                                    dalam proses bisnis.<br>
                                    5. Memperluas jaringan bisnis dan kemitraan sesuai kebutuhan pasar.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Jasa kami --}}
        <div class="section bg-transparent mt-0 mb-4">
            <div class="container clearfix">
                <div class="row justify-content-center" style="margin-top: 100px">
                    <div class="col-md-7 center">
                        <div class="heading-block border-bottom-0 mb-4">
                            <h2 class="mb-4 nott">Jasa Yang Kami Tawarkan Kepada Anda</h2>
                        </div>
                        <div class="svg-line bottommargin-sm clearfix">
                            <img src="{!!asset('webpage/demos/btsa/images/divider-1.svg')!!}" alt="svg divider"
                                height="20">
                        </div>
                        <p>Inilah jasa yang saat ini kami kuasai dan khusus kami tawarkan kepada anda pelaku
                            ekspor dan impor baru. Percayakan hal ini kepada kami ahlinya kami tidak akan
                            mengecewakan anda.</p>
                    </div>
                </div>
            </div>

            <div class="owl-carousel owl-carousel-full image-carousel carousel-widget topmargin-sm"
                data-stage-padding="20" data-margin="10" data-center="true" data-loop="true" data-nav="true"
                data-autoplay="500000" data-speed="400" data-pagi="true" data-items-xs="1" data-items-sm="2"
                data-items-md="2" data-items-lg="3" data-items-xl="4">

                <div class="oc-item text-left">
                    <img src="{!!asset('webpage/demos/btsa/images/cause/domestic.jpg')!!}" alt="Image 1"
                        class="rounded">
                    <div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
                        <h3 class="mb-3"><a>Domestic</a></h3>
                        <p class="mb-4 text-black-50">Kami menyediakan jasa pengiriman via laut ke seluruh
                            wilayah di Indonesia meliputi : <br>
                            1. EMKL (Ekspedisi Muatan Kapal Laut) <br>
                            2. Breakbulk <br>
                            3. Pengiriman alat berat <br>
                            4. Barang Pindahan <br>
                            5. Pengiriman Mobil </p>
                    </div>
                </div>
                <div class="oc-item text-left">
                    <img src="{!!asset('webpage/demos/btsa/images/cause/eksport.jpg')!!}" alt="Image 1" class="rounded">
                    <div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
                        <h3 class="mb-3"><a>Ekspor</a></h3>
                        <p class="mb-4 text-black-50">Kami hadir di pelabuhan / bandara : <br>
                            1. Tanjung Priuk, Jakarta <br>
                            2. Belawan, Sumatera Utara<br>
                            3. Kualanamu, Sumatera Utara<br>
                            4. Soekarno Hatta, Jakarta<br>
                            5. Pelabuhan Tanjung Perak, Surabaya<br>
                            6. bandara Juanda, Surabaya<br>
                            7. Pelabuhan Soekarno Hatta, Makassar<br>
                            8. Pelabuhan Boom Baru, Palembang<br>
                            9. Bandara Sultan Mahmud Badaruddin II, Palembang
                    </div>
                </div>
                <div class="oc-item text-left">
                    <img src="{!!asset('webpage/demos/btsa/images/cause/import.jpg')!!}" alt="Image 1" class="rounded">
                    <div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
                        <h3 class="mb-3"><a>Impor</a></h3>
                        <p class="mb-4 text-black-50">Kami hadir di pelabuhan / bandara : <br>
                            1. Tanjung Priuk, Jakarta <br>
                            2. Belawan, Sumatera Utara<br>
                            3. Kualanamu, Sumatera Utara<br>
                            4. Soekarno Hatta, Jakarta<br>
                            5. Pelabuhan Tanjung Perak, Surabaya<br>
                            6. bandara Juanda, Surabaya<br>
                            7. Pelabuhan Soekarno Hatta, Makassar<br>
                            8. Pelabuhan Boom Baru, Palembang<br>
                            9. Bandara Sultan Mahmud Badaruddin II, Palembang
                    </div>
                </div>
                <div class="oc-item text-left">
                    <img src="{!!asset('webpage/demos/btsa/images/cause/trucking.jpg')!!}" alt="Image 1"
                        class="rounded">
                    <div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
                        <h3 class="mb-3"><a>Trucking</a></h3>
                        <p class="mb-4 text-black-50">Kami menyediakan jasa trucking yang meliputi : <br>
                            1. Trailer<br>
                            2. Dump Truck<br>
                            3. Lost bak<br>
                            4. Mobil Box roda 4/6
                    </div>
                </div>
                <div class="oc-item text-left">
                    <img src="{!!asset('webpage/demos/btsa/images/cause/udara.jpg')!!}" alt="Image 1" class="rounded">
                    <div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
                        <h3 class="mb-3"><a>Pengiriman via udara</a></h3>
                        <p class="mb-4 text-black-50">Kami menyediakan jasa pengiriman via udara meliputi :<br>
                            1. Door to door service<br>
                            2. Airport to airport service<br>
                            3. Custom Clearance in Airport
                    </div>
                </div>
                <div class="oc-item text-left">
                    <img src="{!!asset('webpage/demos/btsa/images/cause/kargo.jpg')!!}" alt="Image 1" class="rounded">
                    <div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
                        <h3 class="mb-3"><a>Proyek Kargo</a></h3>
                        <p class="mb-4 text-black-50">Kami menyediakan jasa proyek kargo : <br>
                            1. Custom Clearance<br>
                            2. Heavy Equipment<br>
                            3. Moving over size cargo<br>
                            4. Carter LCT<br>
                            5. Carter Shipment
                    </div>
                </div>
                <div class="oc-item text-left">
                    <img src="{!!asset('webpage/demos/btsa/images/cause/warehouse.jpg')!!}" alt="Image 1"
                        class="rounded">
                    <div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
                        <h3 class="mb-3"><a>Warehouse Handling</a></h3>
                        <p class="mb-4 text-black-50">Kami hadir di Medan & Palembang
                    </div>
                </div>
                <div class="oc-item text-left">
                    <img src="{!!asset('webpage/demos/btsa/images/cause/distributionhandling.jpg')!!}" alt="Image 1"
                        class="rounded">
                    <div class="oc-desc d-flex flex-column justify-content-center shadow-lg">
                        <h3 class="mb-3"><a>Distribution Handling</a></h3>
                        <p class="mb-4 text-black-50">Kami hadir di seluruh pulau Sumatera
                    </div>
                </div>
            </div>
        </div>

        <div class="clear"></div>

        <div class="container-fluid my-5 clearfix">
            <div class="d-flex flex-column align-items-center justify-content-center center counter-section position-relative py-5"
                style="background: url('{!!asset('webpage/demos/btsa/images/world-map.png')!!}') no-repeat center center/ contain">
                <div class="mx-auto center" style="max-width: 1000px">
                    <h3>Mengapa harus memilih kami sebagai partner logistik anda?</h3>
                </div>

                <div class="row align-items-stretch m-0 w-100 clearfix">
                    <div class="col-lg-4 col-sm-6 center mt-5">
                        <img src="{!!asset('webpage/demos/btsa/images/icons/berpengalaman.svg')!!}"
                            alt="Berpengalaman Icon" width="70" class="mb-4">
                        <h4 class="nott ls0 mt-0">Sudah berpengalaman</h4>
                        <p>Sudah berpengalaman sejak tahun 2000
                            BTSA LOGISTICS telah hadir dan memiliki pengalaman selama lebih dari 18 Tahun.</p>
                    </div>
                    <div class="col-lg-4 col-sm-6 center mt-5">
                        <img src="{!!asset('webpage/demos/btsa/images/icons/respon.svg')!!}" alt="Respon Icon"
                            width="70" class="mb-4">
                        <h4 class="nott ls0 mt-0">Ketepatan waktu yang tepat dan cepat</h4>
                        <p>Kami memiliki tim khusus untuk merespon segala keperluan Anda dan Kami selalu bekerja
                            dengan target dan itu yang membuat kami selalu On Time dalam mengerjakan sesuatu.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 center mt-5">
                        <img src="{!!asset('webpage/demos/btsa/images/icons/team.svg')!!}" alt="Team Icon" width="70"
                            class="mb-4">
                        <h4 class="nott ls0 mt-0">Team yang handal</h4>
                        <p>Kami memiliki tim yang responsif, berkompetensi, berintegritas,
                            berorientasi terhadap layanan dan kerja sama tim.</p>
                    </div>
                </div>
                <div class="row align-items-stretch m-0 w-100 clearfix">
                    <div class="col-lg-4 col-sm-6 center mt-5">
                        <img src="{!!asset('webpage/demos/btsa/images/icons/jaringan.svg')!!}" alt="Jaringan Icon"
                            width="70" class="mb-4">
                        <h4 class="nott ls0 mt-0">Jaringan Luas</h4>
                        <p>Kami memiliki jaringan yang sangat luas yang
                            menguasai pengiriman Antar Pulau,
                            Export/Import via laut dan udara,
                            Trucking mobil kecil hingga besar,
                            Jasa fumigasi standart Barantan dan Jasa Pest Control.</p>
                    </div>
                    <div class="col-lg-4 col-sm-6 center mt-5">
                        <img src="{!!asset('webpage/demos/btsa/images/icons/update.svg')!!}" alt="Respon Icon"
                            width="70" class="mb-4">
                        <h4 class="nott ls0 mt-0">Selalu Berinovasi</h4>
                        <p>Kami selalu berkembang untuk memberikan kenyamanan untuk Anda.</p>
                    </div>
                    <div class="col-lg-4 col-sm-6 center mt-5">
                        <img src="{!!asset('webpage/demos/btsa/images/icons/kontrak.svg')!!}" alt="Kontrak Icon"
                            width="70" class="mb-4">
                        <h4 class="nott ls0 mt-0">Kontrak yang jelas</h4>
                        <p>Kami selalu memberikan kontrak kerja yang jelas, profesional dan transparan.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="clear"></div>

        <div class="section"
            style="background: url('{!!asset('webpage/demos/btsa/images/others/section-bg.jpg')!!}')!!}') no-repeat center center / cover; padding: 80px 0;">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="mb-2">Budaya Perusahaan</h3>
                        <div class="svg-line mb-2 clearfix">
                            <img src="{!!asset('webpage/demos/btsa/images/divider-1.svg')!!}" alt="svg divider"
                                height="10">
                        </div>
                        <p class="mb-5">Kami memiliki budaya budaya perusahaan yang bisa menjadi teladan bagi
                            masyarakat sekitar kami. Tidak hanya terhadap customer tetapi juga kami memiliki
                            sikap yang harus dicontoh di lingkungan kami.</p>
                        <div class="row mission-goals gutter-30 mb-0">
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain bg-white mx-0">
                                    <div class="fbox-media position-relative col-auto p-0 mr-4">
                                        <img src="{!!asset('webpage/demos/btsa/images/icons/integrity.svg')!!}"
                                            alt="Budaya Perusahaan BTSA LOGISTICS" width="50">
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="nott ls0"><a class="text-dark">Integritas</a></h3>
                                        <p>Memiliki sikap kejujuran, terbuka, bertanggung jawab dan dapat
                                            dipercaya dalam melayani pelanggan internal dan eksternal.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain bg-white mx-0">
                                    <div class="fbox-media position-relative col-auto p-0 mr-4">
                                        <img src="{!!asset('webpage/demos/btsa/images/icons/loyality.svg')!!}"
                                            alt="Budaya Perusahaan BTSA LOGISTICS" width="50">
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="nott ls0"><a class="text-dark">Loyalitas</a>
                                        </h3>
                                        <p>Loyal dan setia terhadap perusahaan, karyawan dan pelanggan utama.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain bg-white mx-0">
                                    <div class="fbox-media position-relative col-auto p-0 mr-4">
                                        <img src="{!!asset('webpage/demos/btsa/images/icons/visioner.svg')!!}"
                                            alt="Budaya Perusahaan BTSA LOGISTICS" width="50">
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="nott ls0"><a class="text-dark">Visioner</a>
                                        </h3>
                                        <p>Memiliki pandangan atau visi kedepan serta mampu membuat rencana
                                            untuk mewujudkannya.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain bg-white mx-0">
                                    <div class="fbox-media position-relative col-auto p-0 mr-4">
                                        <img src="{!!asset('webpage/demos/btsa/images/icons/beproactive.svg')!!}"
                                            alt="Budaya Perusahaan BTSA LOGISTICS" width="50">
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="nott ls0"><a class="text-dark">Pro Aktif</a>
                                        </h3>
                                        <p>Tanggap dan inisiatif dalam menghadapi situasi internal dan eksternal
                                            untuk mencapai hal-hal yang lebih baik bagi perusahaan, karyawan dan
                                            pelanggan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain bg-white mx-0">
                                    <div class="fbox-media position-relative col-auto p-0 mr-4">
                                        <img src="{!!asset('webpage/demos/btsa/images/icons/teamwork.svg')!!}"
                                            alt="Budaya Perusahaan BTSA LOGISTICS" width="50">
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="nott ls0"><a class="text-dark">Kerjasama tim</a>
                                        </h3>
                                        <p>Saling bekerja sama, menghormati, menghargai sesama rekan kerja dan
                                            pelanggan untuk mencapai tujuan dan visi perusahaan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain bg-white mx-0">
                                    <div class="fbox-media position-relative col-auto p-0 mr-4">
                                        <img src="{!!asset('webpage/demos/btsa/images/icons/service.svg')!!}"
                                            alt="Budaya Perusahaan BTSA LOGISTICS" width="50">
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="nott ls0"><a class="text-dark">Layanan Tinggi</a>
                                        </h3>
                                        <p>Memberikan pelayanan prima kepada pelanggan internal dan eksternal
                                            perusahaan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box fbox-plain bg-white mx-0">
                                    <div class="fbox-media position-relative col-auto p-0 mr-4">
                                        <img src="{!!asset('webpage/demos/btsa/images/icons/awareness.svg')!!}"
                                            alt="Budaya Perusahaan BTSA LOGISTICS" width="50">
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="nott ls0"><a class="text-dark">Awareness</a>
                                        </h3>
                                        <p>Menyadari dan selalu bertindak positif serta bertanggung jawab untuk
                                            membuat lingkungan internal dan eksternal menjadi lebih baik.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-details mb-0 bg-white" style="padding: 80px 0 160px;">
            <div class="w-100 h-100 d-none d-md-block"
                style="position: absolute; top: 0; left: 0; background: #FFF url('{!!asset('webpage/demos/btsa/images/others/6.jpg')!!}') no-repeat bottom right / cover;">
            </div>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-4 px-4 mb-5">
                        <h4 class="font-weight-medium mb-4">Kantor Kami</h4>
                        <?php $c = Date('Y'); $l=2000; $re=$c-$l; ?>
                        <p class="mb-3">Kami telah berkembang dari tahun 2000 hingga tahun {{$c}}. Sudah
                            berpengalaman sudah lebih dari {{$re}}+. Dan saat ini kami memiliki lebih dari 4
                            kantor cabang yang tersebar diberbagai kota besar Indonesia.</p>
                        <div id="faqs" class="faqs">

                            <div class="toggle faq faq-marketplace faq-authors">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-question-sign"></i>
                                        <i class="toggle-open icon-question-sign"></i>
                                    </div>
                                    <div class="toggle-title">
                                        Medan
                                    </div>
                                </div>
                                <div class="toggle-content">
                                    <strong>PT Berlian Tangguh Sejahtera</strong><br><br>
                                    <abbr title="Location"><strong>Location:</strong></abbr> Jalan Williem
                                    Iskandar Komp. MMTC B 84-85
                                    Medan Estate, Deli Serdang Medan 20371 <br>
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> 061 8003 2999<br>
                                    <abbr title="Fax Number"><strong>Fax:</strong></abbr> 061 8003 2996<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> market@btsa.co.id
                                    <br><br>
                                    <strong>PT Berlian Transtar Abadi</strong><br><br>
                                    <abbr title="Location"><strong>Location:</strong></abbr> Jalan Williem
                                    Iskandar Komp. MMTC C 93-94
                                    Medan Estate, Deli Serdang Medan 20371 <br>
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> 061 8003 3461<br>
                                    <abbr title="Fax Number"><strong>Fax:</strong></abbr> 061 8003 2996<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> market@btsa.co.id
                                </div>
                            </div>
                            <div class="toggle faq faq-marketplace faq-authors">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-question-sign"></i>
                                        <i class="toggle-open icon-question-sign"></i>
                                    </div>
                                    <div class="toggle-title">
                                        Palembang
                                    </div>
                                </div>
                                <div class="toggle-content">
                                    <strong>PT Sumber Transtar Abadi</strong><br><br>
                                    <abbr title="Location"><strong>Location:</strong></abbr> Jalan Veteran
                                    No.173C Kec.Ilir Timur I,
                                    Kel. Kepandean Baru - Palembang 31025 <br>
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> 0711 354811<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> market@btsa.co.id

                                </div>
                            </div>
                            <div class="toggle faq faq-marketplace faq-authors">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-question-sign"></i>
                                        <i class="toggle-open icon-question-sign"></i>
                                    </div>
                                    <div class="toggle-title">
                                        Jakarta
                                    </div>
                                </div>
                                <div class="toggle-content">
                                    <strong>PT Berlian Transtar Abadi</strong><br><br>
                                    <abbr title="Location"><strong>Location:</strong></abbr> Ruko Gading Bukit
                                    Indah Blok SB No.25
                                    Jl. Raya Gading Kirana, RT.18/RW.8
                                    Kelapa Gading Barat, Jakarta Utara 14240 <br>
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> 021 4585 4261<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> market@btsa.co.id

                                </div>
                            </div>
                            <div class="toggle faq faq-marketplace faq-authors">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-question-sign"></i>
                                        <i class="toggle-open icon-question-sign"></i>
                                    </div>
                                    <div class="toggle-title">
                                        Surabaya
                                    </div>
                                </div>
                                <div class="toggle-content">
                                    <strong>PT Berlian Transtar Abadi</strong><br><br>
                                    <abbr title="Location"><strong>Location:</strong></abbr> Jl. Kalimas Baru
                                    Blok A-8 No.29, Perak Utara, Kec. Pabean Cantian
                                    Kota SBY, Jawa Timur 60165 <br>
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> 021 4585 4261<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> market@btsa.co.id

                                </div>
                            </div>
                            <div class="toggle faq faq-marketplace faq-authors">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-question-sign"></i>
                                        <i class="toggle-open icon-question-sign"></i>
                                    </div>
                                    <div class="toggle-title">
                                        Makassar
                                    </div>
                                </div>
                                <div class="toggle-content">
                                    <strong>PT Berlian Transtar Abadi</strong><br><br>
                                    <abbr title="Location"><strong>Location:</strong></abbr> Jalan gunung
                                    latimojong
                                    Ruko latimojong indah blok A - 28 <br>
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> 0411 363 3366<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> market@btsa.co.id

                                </div>
                            </div>
                            <div class="toggle faq faq-marketplace faq-authors">
                                <div class="toggle-header">
                                    <div class="toggle-icon">
                                        <i class="toggle-closed icon-question-sign"></i>
                                        <i class="toggle-open icon-question-sign"></i>
                                    </div>
                                    <div class="toggle-title">
                                        Bali
                                    </div>
                                </div>
                                <div class="toggle-content">
                                    <strong>PT Berlian Transtar Abadi</strong><br><br>
                                    <abbr title="Location"><strong>Location:</strong></abbr> Jl. Raya Dalung
                                    Abianbase No 109
                                    Kuta Utara, Dalung - Bali 80531 <br>
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> 0361 909 4168<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> market@btsa.co.id

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 px-4 mb-5">
                        <h4 class="font-weight-medium mb-4">Our Group</h4>
                        <img data-toggle="modal" data-target="#plpview" class="imgpartner"
                            src="{!!asset('webpage/demos/btsa/images/partner/plp.png')!!}" alt="Partner BTSA LOGISTICS">
                        <img data-toggle="modal" data-target="#infinityview" class="imgpartner"
                            src="{!!asset('webpage/demos/btsa/images/partner/infinity.png')!!}"
                            alt="Partner BTSA LOGISTICS">

                    </div>

                    <div class="col-md-4 px-4 mb-5">
                        <h4 class="font-weight-medium mb-4">Hubungi Kami</h4>
                        <p>Kamu dapat mengirimi kami pesan lewat email untuk mendapatkan penawaran terbaik kami.
                        </p>
                        <a href="mailto:support@btsa.co.id" class="mb-1 d-block"><i
                                class="icon-envelope21 position-relative" style="top: 1px;"></i> support@btsa.co.id</a>
                        <div class="font-weight-medium mb-2 d-block">Monday - Saturday 08:15 - 17:00</div>
                        <a href="/facebook" class="social-icon si-light si-rounded si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="/instagram" class="social-icon si-light si-rounded si-instagram">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>
                        <a href="/youtube" class="social-icon si-light si-rounded si-youtube">
                            <i class="icon-youtube"></i>
                            <i class="icon-youtube"></i>
                        </a>
                        <a href="/wikipedia" class="social-icon si-light si-rounded si-wikipedia">
                            <i class="icon-wikipedia"></i>
                            <i class="icon-wikipedia"></i>
                        </a>
                        <a href="/linkedin" class="social-icon si-light si-rounded si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section><!-- #content end -->

<!-- Footer
		============================================= -->
<section id="id">
    <div class="content-wrap" style="padding-bottom:0px;">
        <div class="container clearfix">
            <div class="row justify-content-center">
                <div class="col-md-7 center">
                    <div class="heading-block border-bottom-0 mb-4">
                        <h2 class="mb-4 nott">Layanan Kami?</h2>
                    </div>
                    <div class="svg-line bottommargin-sm clearfix">
                        <img src="{!!asset('webpage/demos/btsa/images/divider-1.svg')!!}" alt="svg divider" height="20">
                    </div>

                    <p>Dari tahun 2000 hingga tahun {{$current}} ini, kami masih akan terus berkembang, dan akan terus
                        menyebarkan layanan kami hingga ke seluruh jaringan Indonesia. Saat ini kami hadir di beberapa
                        kota kota besar Indonesia.</p>
                </div>
            </div>
            <div class="row">
                <div style="height: 500px; margin-bottom: 20px;" class="gmap" data-latitude="-2.3201742"
                    data-longitude="99.4453996" data-zoom="5" data-markers='[
                    {latitude:3.603072, longitude:98.709327,html: "Medan,Indonesia"},
                    {latitude:1.1260904, longitude:104.0470843,html: "Batam,Indonesia"},
                    {latitude:-6.1500189, longitude:106.8950059,html: "Jakarta,Indonesia"},
                    {latitude:-6.2322, longitude:107.8574464,html: "Patimban,Indonesia"},
                    {latitude:0.5139625, longitude:101.371135,html: "Pekanbaru,Indonesia"},
                    {latitude:-2.9547949, longitude:104.6929235,html: "Palembang,Indonesia"},
                    {latitude:-7.0245542, longitude:110.3470242,html: "Semarang,Indonesia"},
                    {latitude:-7.2754438, longitude:112.6426428,html: "Surabaya,Indonesia"},
                    {latitude:-8.4109527, longitude:115.1842303,html: "Bali,Indonesia"},
                    {latitude:-8.6558017, longitude:116.3209933,html: "Lombok,Indonesia"},
                    {latitude:-5.1483236, longitude:119.4276793,html: "Makassar,Indonesia"}]' data-icon='{image:
                    "https://res.cloudinary.com/bintangtobing-com/image/upload/v1602647205/webpublic/pin-star.png",iconsize:
                    [32, 32],iconanchor: [14,44]}'>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
