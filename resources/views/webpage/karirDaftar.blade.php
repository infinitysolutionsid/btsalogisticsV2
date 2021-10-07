@extends('home.index')
@section('activekarir','active')
@section('titlepage', 'Daftar Karir '.$jobs->title)
@section('content')
<section id="page-title" class="page-title-mini">
    <div class="container clearfix">
        <h1>{{$jobs->title}}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item">Karir</li>
            <li class="breadcrumb-item">{{$jobs->title}}</li>
            <li class="breadcrumb-item active" aria-current="page">Form Register</li>
        </ol>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row career">
                <div class="row m-b-30">
                    <div class="col-lg-12">
                        <p class="breadcumb-form"><a href="/karir">Karir</a> <span style="font-size:0.55rem;"><i
                                    class="fal fa-circle mx-2"></i></span> <a
                                href="/karir/detail/{{$jobs->title}}">{{$jobs->title}}</a>
                            <span style="font-size:0.55rem;"><i class="fal fa-circle mx-2"></i></span> <a href="#">
                                Form Pendaftaran
                                Umum</a></p>
                        <h3><strong>FORMULIR PENDAFTARAN</strong></h3>
                    </div>
                    <div class="col-lg-12">
                        <form action="/karir/daftar/{{$jobs->title}}/apply" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>Posisi</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="posisi" value="{!!$jobs->title!!}"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>Sumber informasi lowongan</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <select name="sumber_informasi" class="custom-select" required>
                                            <option value="-">-</option>
                                            <option value="Iklan SMS">Iklan SMS</option>
                                            <option value="Top Karir">Top Karir</option>
                                            <option value="Linkedin">Linkedin</option>
                                            <option value="Line Jobs">Line Jobs</option>
                                            <option value="Jobstreet">Jobstreet</option>
                                            <option value="Kalibrr">Kalibrr</option>
                                            <option value="Jobs.id">Jobs.id</option>
                                            <option value="Teman / Keluarga">Teman / Keluarga</option>
                                            <option value="Poster / Flyer / Informasi Universitas">Poster / Flyer /
                                                Informasi
                                                Universitas</option>
                                            <option value="Informasi Social Media (WA, FB, Instagram, dll)">Informasi
                                                Social
                                                Media (WA,
                                                FB, Instagram, dll)</option>
                                            <option value="Lain-lain">Lain-lain</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group supportfile">
                                        <p><b>Upload pas foto:</b></p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input class="form-control" type="file" name="picture" accept="image/*"
                                            required>
                                        <small class="text-muted">File pas foto maksimal memiliki 1MB.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>Nama lengkap</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input type="text" name="nama_lengkap" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>No KTP</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input type="text" name="noktp" class="form-control" pattern="[0-9]{16}"
                                            required>
                                        <small class="muted-text">Maximum character is 16.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>No NPWP</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input type="text" name="nonpwp" max="15" class="form-control">
                                        <small class="muted-text">Maximum character is 15. If you haven't NPWP number,
                                            it's ok. Dont worry about it.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>No BPJS Kesehatan</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input type="text" name="nobpjs" max="13" class="form-control">
                                        <small class="muted-text">Maximum character is 13. If you haven't NPWP number,
                                            it's ok. Dont worry about it.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>Anak ke</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <select name="anak_ke" class="custom-select" required>
                                            @for ($i = 0; $i<=7; $i++) <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>Tempat, Tanggal Lahir</b></p>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="tempat_lahir" placeholder="Tempat lahir"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input class="form-control" type="date" name="tanggal_lahir" required>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <p><b>Provinsi</b></p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <select name="provinsi" id="provinsi" class="custom-select" required>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <p><b>Kota Domisili</b></p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <select name="domisili" id="domisili" class="custom-select" required>
                                                <option value="">Pilih</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <p><b>Kecamatan</b></p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <select name="kecamatan" id="kecamatan" class="custom-select" required>
                                                <option value="">Pilih</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <p><b>Kelurahan</b></p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <select name="kelurahan" id="kelurahan" class="custom-select" required>
                                                <option value="">Pilih</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>Jenis kelamin</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <select name="jenis_kelamin" class="custom-select" required>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>Agama</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <select name="agama" class="custom-select" required>
                                            @foreach ($agama as $agama)
                                            <option value="{{$agama->id}}">{{$agama->agama_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>Suku</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <select name="suku" class="custom-select" required>
                                            @foreach ($suku as $suku)
                                            <option value="{{$suku->id}}">{{$suku->suku_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>Alamat domisili</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <textarea name="alamat_domisili" cols="30" rows="10"
                                            placeholder="Alamat yang lengkap beserta kecamatan dan kelurahan, tulis disini..."
                                            required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>Email</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>Nomor HP</b><br>Contoh: 0812-xxxx-xxxx</p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input type="tel" name="nohp" class="form-control"
                                            pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>Status perkawinan</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <select name="status_perkawinan" class="custom-select" required>
                                            <option value="Lajang">Lajang</option>
                                            <option value="Menikah">Menikah</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>Pendidikan terakhir</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <select name="pendidikan_akhir" class="custom-select" required>
                                            <option value="SMP/SMA/SMK/SMU">SMP/SMA/SMK/SMU</option>
                                            <option value="Akademi">Akademi</option>
                                            <option value="Sarjana">Sarjana</option>
                                            <option value="D1/D2/D3">D1/D2/D3</option>
                                            <option value="Pasca">Pasca</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <p><b>Gaji yang diharapkan</b></p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input type="text" data-type="currency" name="expected_sallary" value=""
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-11">
                                    <div class="form-group">
                                        <p><b>Ceritakan kepada kami, mengapa kami harus menerima kamu?</b></p>
                                        <textarea name="about" cols="30" rows="10" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-11">
                                    <div class="form-group supportfile">
                                        <p><b>Upload dokumen pendukung:</b></p>
                                        <input class="form-control" type="file" name="supported_file"
                                            accept="application/pdf" required>
                                        <small class="text-muted"><b>Harap dibaca:</b> Harap mencantumkan dokumen yang
                                            <b>sudah berisi CV, Pas Foto, KTP/SIM/NPWP</b> didalamnya, lalu <b>simpan
                                                dokumen</b>
                                            tersebut dengan <b>format dokumen
                                                PDF</b>.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-11 text-right">
                                    <button type="submit" class="btn btn-gradient-blue-btsa">KIRIM LAMARAN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        loadProvinsi();

        function loadProvinsi() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'GET',
                url: '/candidate/get-provinsi',
                success: function (response) {
                    console.log(response);
                    let html = "<option value=''>Pilih provinsi</option>";
                    response.map(function (v) {
                        html +=
                            `<option value="${v.id}">${v.province_name}</option>`;
                    })
                    $('#provinsi').html(html);
                },
                error: function (err) {
                    console.log("error", err);
                }
            });
        }
        $('#provinsi').change(function () {
            var provinsi = $("#provinsi").val();
            $.ajax({
                method: 'GET',
                url: '/candidate/get-domisili/' + provinsi,
                success: function (response) {
                    console.log(response);
                    let html = "<option value=''>Pilih domisili</option>";
                    response.map(function (v) {
                        html +=
                            `<option value="${v.id}">${v.domisili_name}</option>`;
                    })
                    $("#domisili").html(html);
                }
            });
        });

        $("#domisili").change(function () {
            var domisili = $("#domisili").val();
            console.log("kecamatan", kecamatan);
            $.ajax({
                method: 'GET',
                url: "/candidate/get-kecamatan/" + domisili,
                success: function (response) {
                    console.log(response);
                    let html = "<option value=''>Pilih kecamatan</option>";
                    response.map(function (v) {
                        html +=
                            `<option value="${v.id}">${v.kecamatan_name}</option>`;
                    })
                    $("#kecamatan").html(html)
                }
            });
        });

        $("#kecamatan").change(function () {
            var kecamatan = $("#kecamatan").val();
            console.log("kelurahan", kelurahan);
            $.ajax({
                method: 'GET',
                url: "/candidate/get-kelurahan/" + kecamatan,
                success: function (response) {
                    console.log(response);
                    let html = "<option value=''>Pilih kelurahan</option>";
                    response.map(function (v) {
                        html +=
                            `<option value="${v.id}">${v.kelurahan_name}</option>`;
                    })
                    $("#kelurahan").html(html)
                }
            });
        });
    });

    $("input[data-type='currency']").on({
        keyup: function () {
            formatCurrency($(this));
        },
        blur: function () {
            formatCurrency($(this), "blur");
        }
    });


    function formatNumber(n) {
        // format number 1000000 to 1,234,567
        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }


    function formatCurrency(input, blur) {
        // appends $ to value, validates decimal side
        // and puts cursor back in right position.

        // get input value
        var input_val = input.val();

        // don't validate empty input
        if (input_val === "") {
            return;
        }

        // original length
        var original_len = input_val.length;

        // initial caret position
        var caret_pos = input.prop("selectionStart");

        // check for decimal
        if (input_val.indexOf(".") >= 0) {

            // get position of first decimal
            // this prevents multiple decimals from
            // being entered
            var decimal_pos = input_val.indexOf(".");

            // split number by decimal point
            var left_side = input_val.substring(0, decimal_pos);
            var right_side = input_val.substring(decimal_pos);

            // add commas to left side of number
            left_side = formatNumber(left_side);

            // validate right side
            right_side = formatNumber(right_side);

            // On blur make sure 2 numbers after decimal
            if (blur === "blur") {
                right_side += "00";
            }

            // Limit decimal to only 2 digits
            right_side = right_side.substring(0, 2);

            // join number by .
            input_val = "Rp" + left_side + "." + right_side;

        } else {
            // no decimal entered
            // add commas to number
            // remove all non-digits
            input_val = formatNumber(input_val);
            input_val = "Rp" + input_val;

            // final formatting
            if (blur === "blur") {
                input_val += ".00";
            }
        }

        // send updated string to input
        input.val(input_val);

        // put caret back in the right position
        var updated_len = input_val.length;
        caret_pos = updated_len - original_len + caret_pos;
        input[0].setSelectionRange(caret_pos, caret_pos);
    }

</script>
@endsection
