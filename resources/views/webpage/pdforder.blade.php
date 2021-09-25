<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Letter of Delivery of Goods</title>

    <style>
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5D6975;
            text-decoration: underline;
        }

        body {
            position: relative;
            width: 21cm;
            height: 29.7cm;
            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 12px;
            font-family: Arial;
        }

        header {
            padding: 10px 0;
            margin-bottom: 30px;
        }

        header h1 {
            font-weight: 600;
            color: #292562;
        }

        #logo {
            text-align: center;
            margin-bottom: 10px;
        }

        #logo img {
            width: 300px;
        }

        h1 {
            border-top: 1px solid #5D6975;
            border-bottom: 1px solid #5D6975;
            color: #5D6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
            background:
                url(https://res.cloudinary.com/bintangtobing-com/image/upload/v1603770872/webpublic/dimension.png);
        }

        #project {
            float: left;
        }

        #project span {
            color: #5D6975;
            text-align: right;
            width: 52px;
            margin-right: 10px;
            display: inline-block;
            font-size: 0.8em;
        }

        #company {
            float: right;
            text-align: right;
        }

        #project div,
        #company div {
            white-space: nowrap;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table tr:nth-child(2n-1) td {
            background: #F5F5F5;
        }

        table th,
        table td {
            text-align: left;
        }

        table th {
            padding: 5px 20px;
            color: #5D6975;
            border-bottom: 1px solid #C1CED9;
            white-space: nowrap;
            font-weight: normal;
        }

        table .service,
        table .desc {
            text-align: left;
        }

        table td {
            padding: 20px;
            text-align: left;
        }

        table td.service,
        table td.desc {
            vertical-align: top;
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1.2em;
        }

        table td.grand {
            border-top: 1px solid #5D6975;
            ;
        }

        #notices {
            padding-top: 100px;
        }

        #notices .notice {
            color: #5D6975;
            font-size: 1.2em;
        }

        footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
        }

        footer .left {
            float: left;
        }

        footer .right {
            float: right;
        }

        #notices img {
            float: right;
            width: 100px;
        }

        #rightgoods {
            float: right;
        }

        #rightgoods span {
            margin-left: 70px;
        }

        #place .left {
            float: left;
        }

        #place .right {
            float: right;
        }

        #place table tr:nth-child(2n-1) td {
            background: none;
        }

        #place table th {
            border-bottom: 0;
            margin-bottom: 20px;
        }

    </style>
</head>

<body>
    <header class="clearfix">
        <div id="logo">
            <img
                src="https://res.cloudinary.com/bintangtobing-com/image/upload/v1603770811/webpublic/LogoBTSA2019v1.png">
        </div>
        <h1>Track ID <abbr title="">BTSA202027811026</abbr></h1>
        <div id="company" class="clearfix">
            <div><strong>Penerima</strong></div>
            <div>PT Berlian Transtar Abadi <br>Jl Williem Iskandar Komp. MMTC Blok C</div>
            {{-- <div>(602) 519-0450</div> --}}
            {{-- <div><a href="mailto:company@example.com">company@example.com</a></div> --}}
        </div>
        <div id="project" class="clearfix">
            <div><strong>Pengirim</strong></div>
            <div>PT BTSA (Bpk.David) </div>
            {{-- <div>(602) 519-0450</div>
            <div><a href="mailto:company@example.com">company@example.com</a></div> --}}
        </div>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th class="desc">DESCRIPTION (Isi Barang)</th>
                    <th>Muatan Barang</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="desc">Satu Kotak Tumblr Infinity Solutions</td>
                    <td class="unit">25 Kg</td>
                </tr>
            </tbody>
        </table>
        <div id="place">
            <div class="left">
                <p>Dibuat pada 2020-10-26 14:44:21</p>
            </div>
            <div class="right">
                <table>
                    <thead>
                        <tr>
                            <th>Pengirim</th>
                            <th>
                                Penerima
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>PT Berlian Transtar Abadi</td>
                        <td>Bpk. David</td>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="notices">
            <div>NOTICE:</div>
            <div class="notice">
                <ol>
                    <li>Perusahaan tidak menjamin ketepatan waktu pengiriman / penyerahan yang dikehendaki Pengirim dan
                        tidak memberikan ganti rugi akiibat keterlambatan pengiriman.</li>
                    <li>Keselamatan barang kiriman akibat pengepakan yang tidak sempurna yang berasal dari Pengirim
                        sehingga menimbulkan kerugian sepenuhnya menjadi tangguh jawab Pengirim.</li>
                    <li>Pengirim bertanggung jawab terhadap semua biaya pengiriman sesuai perhitungan menurut tarif yang
                        dikeluarkan perusahaan.</li>
                    <li>Pada waktu barang diserahkan, ternyata bungkusan rusak / pecah karena goncangan didalam
                        pengiriman, segala kerusakan tidak dapat penggantian.</li>
                    <li>Setelah laporan pengiriman barang ini terbit dari perusahaan, berarti dinyatakan sah, dan fungsi
                        barcode dibawah dapat digunakan untuk melacak pengiriman barang.</li>
                </ol>
            </div>
            <div>
                <img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/1200px-QR_code_for_mobile_English_Wikipedia.svg.png">
            </div>
        </div>
    </main>
    <footer>
        <div class="left">
            Letter of Delivery was created by BTSA Web System and is valid without the signature and seal.
        </div>
        <div class="right">
            <?php $date = Date('Y-m-d'); $time = Date('h:i');
                echo($date); echo('&nbsp;'); echo($time);
            ?>

        </div>
    </footer>
</body>

</html>
