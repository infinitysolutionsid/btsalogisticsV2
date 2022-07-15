@extends('home.index')
@section('activetentang','active')
@section('titlepage','Tentang kami')
@section('content')
<section id="page-title" class="page-title-mini">
    <div class="container clearfix">
        <h1>Tentang Kami</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row col-mb-80 mb-0">
                <div class="col-12">

                    <div class="heading-block center border-bottom-0">
                        <h2>Tentang Kami</h2>
                        <span>The only way to do great work is to love what you do <i>-Steve Jobs</i></span>
                    </div>

                    <div class="fslider" data-pagi="false" data-animation="fade">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide"><a href="#"><img
                                            src="{!!asset('webpage/demos/btsa/images/slider/2.jpeg')!!}"
                                            alt="About BTSA LOGISTICS"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="padding-bottom:0px;">
                    <h2 style="margin-bottom: 0px;">Lebih dekat dengan kami</h2>
                    <p class="text-justify">Didirikan pada tahun 2000,
                        BTSA Logistics telah menjadi salah satu perusahaan jasa ekspedisi terpercaya di Indonesia. Saat
                        ini kami terdiri dari 4 departemen : Domestic, Export, Import dan Trucking. Berawal dari
                        departemen Domestic di tahun 2000,
                        selanjutnya pada tahun 2003 terbentuklah departemen Trucking sesuai kebutuhan pelanggan yakni
                        ketepatan waktu dalam pengiriman barang. <br><br>
                        Seiring dengan berjalannya waktu, rasa kepercayaan pelanggan mulai terpupuk dan terbina dengan
                        baik,
                        sehingga pelanggan memberikan dukungan kepada BTSA Logistics agar melakukan ekspansi untuk
                        menyediakan layanan berupa kepengurusan kepabeanan (PPJK). Maka pada tahun 2010 terbentuklah
                        departemen Import sesuai kebutuhan pasar saat itu.
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="text-justify">
                        Pada tahun 2012
                        BTSA Logistics mulai membentuk departemen Export yang didukung oleh salah satu perusahaan swasta
                        berskala internasional di Medan.

                        BTSA Logistics tergabung dalam PT. Berlian Tangguh Sejahtera untuk legalitas departemen Domestic
                        dan PT. Berlian Transtar Abadi untuk legalitas departemen Export, Import dan Trucking.
                        <br><br>
                        Kami memiliki tim yang responsif, berkompetensi, berintegritas dan berorientasi terhadap layanan
                        dan kerjasama tim. Kami sangat menyadari efek berganda dari keterlambatan distribusi barang bagi
                        perusahaan yang menjadi pelanggan kami. Tim kami akan selalu memberikan informasi, masukan dan
                        solusi kreatif
                        sehingga proses bisnis menjadi lebih efektif dan efisien.

                        Kami juga menjalin kerjasama dengan pelayaran pelayaran dan agent baik domestik maupun
                        internasional guna memperlebar sayap jangkauan jasa
                        BTSA Logistics.
                        <br><br>
                        BTSA Logistics akan selalu beradaptasi, memperbaharui dan berkembang agar senantiasa memberikan
                        pelayanan prima dan optimal seperti kecepatan, keamanan dan keselamatan pengiriman barang. Kami
                        berkomitmen menjadi mitra logistik terpercaya untuk berbagai perusahaan yang berskala kecil,
                        menengah ,besar baik itu perusahaan multinasional hingga internasional sebagaimana tertuang
                        dalam motto kami, “ Your Reliable Logistics Partner”.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h2 style="margin-bottom: 0px;">Visi Kami</h2>
                    <p>Menjadi perusahaan ekspedisi terpercaya di Indonesia.</p>
                    <br>
                    <h2 style="margin-bottom: 0px;">Misi Kami</h2>
                    <p>
                        1. Mempersiapkan SDM yang berkompeten di bidangnya
                        serta berintegritas tinggi <br>
                        2. Memberikan servis prima seperti kecepatan, keamanan
                        dan keselamatan pengiriman barang <br>
                        3. Senantiasa menyampaikan informasi serta solusi kreatif
                        untuk memecahkan masalah pelanggan <br>
                        4. Berupaya menghasilkan / menciptakan efisiensi dan
                        efektifitas bersama pelanggan dan mitra usaha dalam
                        proses bisnis <br>
                        5. Memperluas jaringan bisnis dan kemitraan sesuai
                        kebutuhan pasar <br>
                    </p>
                </div>
                <div class="col-lg-6 text-right">
                    <img src="{!!asset('webpage/demos/btsa/images/others/visi.jpg')!!}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
