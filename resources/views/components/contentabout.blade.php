<!DOCTYPE html>
<html lang="en" class="html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bom {
            display: flex;
            align-items: center;
            width: 80%;
            padding-left: 50px;
            padding-top: 50px;
        }
        .teks {
            width: 90%;
            padding-left: 80px;
            padding-top: 20px;
            margin-bottom: 60px;
        }

        .title {
            display: flex;
            height: 20px;
            align-items: center;
            flex: 1;
        }

        .judul {
            color: #000;
            font-family: 'SFUIText-Regular', sans-serif;
            font-size: 40px;
            font-style: normal;
            font-weight: 800;
            line-height: 30px;
        }

        .initext {
            text-align: justify;
        }

        @media screen and (max-width: 1050px) {
            .bom {
                margin-top: -70px;
                padding-left: 55px; /* Adjust padding */
            }
        }

        @media screen and (max-width: 768px) {
            .bom {
                margin-top: -20px;
                padding-left: 25px; /* Adjust padding */
            }
            .teks {
                padding-left: 50px; /* Adjust padding */
            }
        }

        @media screen and (max-width: 480px) {
            .bom {
                margin-top: -180px;
                padding-left: 25px; /* Adjust padding */
            }
            .teks {
                padding-left: 50px; /* Adjust padding */
            }
            .judul {
                font-size: 30px; /* Reduce font size for smaller screens */
            }
        }
        .member{
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="bom">
        <img src="{{ asset('assets/images/kuning.png') }}" alt="" class="img-fluid">
        <div class="title">
            <p class="judul">SEKILAS PERUSAHAAN</p>
        </div>
    </div>
    <div class="member">
        <center>
        <img src="{{ asset('assets/images/utmember.png') }}" alt="" class="img-fluid">
        </center>
    </div>
    <div class="teks">
        <p class="initext">United Tractors merupakan anak usaha dari PT Astra International Tbk (“Astra”), salah satu grup usaha terbesar dan terkemuka di Indonesia dengan jaringan layanan menjangkau berbagai industri dan sektor. Sejak 19 September 1989, United Tractors telah menjadi perusahaan publik dengan mencatatkan sahamnya di Bursa Efek Indonesia (dahulu Bursa Efek Jakarta dan Bursa Efek Surabaya). Hingga kini Astra memiliki 59,5% saham United Tractors, dengan sisa saham dimiliki oleh publik.</p>
        <p class="initext">Saat ini United Tractors telah berkembang menjadi salah satu pemain utama di sektor dan industri dalam negeri, melalui lima pilar bisnis, yaitu Mesin Konstruksi, Kontraktor Penambangan, Pertambangan, Industri Konstruksi dan Energi.</p>
    </div>
    <x-footer />
</body>

</html>
