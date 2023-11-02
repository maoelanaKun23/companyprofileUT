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
            padding-top: 20px;
        }

        .teks {
            width: 90%;
            padding-left: 80px;
            padding-top: 20px;
        }

        .title {
            display: flex;
            height: 20px;
            flex: 1;
        }

        .judul {
            color: #000;
            font-family: 'SFUIText-Regular', sans-serif;
            font-size: 40px;
            font-style: normal;
            font-weight: 800;
            line-height: 20px;
        }

        .initext {
            text-align: justify;
        }

        @media screen and (max-width: 1050px) {
            .bom {
                margin-top: -70px;
                padding-left: 55px;
                /* Adjust padding */
            }
        }

        @media screen and (max-width: 768px) {
            .bom {
                margin-top: -20px;
                padding-left: 25px;
                /* Adjust padding */
            }

            .teks {
                padding-left: 50px;
                /* Adjust padding */
            }

            .judul {
                font-size: 30px;
                /* Reduce font size for smaller screens */
            }

            .hub-1 img {
                max-width: 100%;
            }

            .hub-2 {
                width: 100%;
            }
        }

        @media screen and (max-width: 480px) {
            .bom {
                margin-top: -180px;
                padding-left: 25px;
                /* Adjust padding */
            }

            .teks {
                padding-left: 50px;
                /* Adjust padding */
            }

            .tulis {
                font-size: 2.3vw;
            }
        }

        .hubung {
            width: 100%;
            display: flex;
            text-align: left;
        }

        .hub-1 {
            width: 60%;
        }

        .hub-2 {
            width: 40%;
        }

        .text-u {
            color: #000;
            font-family: 'SFUIText-Regular', sans-serif;
            font-size: 1.8vw;
            font-style: normal;
            font-weight: 650;
            line-height: 20px;
        }
        .tulis {
            color: #000;
            font-family: 'SFUIText-Regular', sans-serif;
            font-size: 1.4vw;
            font-style: normal;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="bom">
        <img src="{{ asset('assets/images/kuning.png') }}" alt="" class="img-fluid">
        <div class="title">
            <p class="judul">KONTAK</p>
        </div>
    </div>
    <div class="teks">
        <p class="initext">Jika Anda memiliki pertanyaan atau membutuhkan informasi, silahkan hubungi kami atau mengisi formulir di bawah ini:</p>
    </div>
    <div class="hubung">
        <div class="hub-1">
            <img src="{{ asset('assets/images/csrv.png') }}" class="img-fluid csrv">
        </div>
        <div class="hub-2">
            <p class="text-u">PT United Tractors Tbk</p>
            <p class="tulis">
                Jl. Raya Bekasi Km 22, Cakung, Jakarta Timur 13910
                <br />
                Telepon : +62 21 2457 9999
            </p>
            <p class="tulis">
                Email : <br />
                Hubungan Investor :<br />
                ir@unitedtractors.com
            </p>
            <p class="tulis">
                Rekrutmen :<br />
                recruitment@unitedtractors.com
            </p>
            <p class="tulis">
                Layanan Pelanggan:<br />
                utcall@unitedtractors.com
            </p>
        </div>
    </div>
    <x-footer />
</body>

</html>
