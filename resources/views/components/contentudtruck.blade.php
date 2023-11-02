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

            .judul {
                font-size: 30px;
                /* Reduce font size for smaller screens */
            }
        }
    </style>
</head>

<body>
    <div class="bom">
        <img src="{{ asset('assets/images/kuning.png') }}" alt="" class="img-fluid">
        <div class="title">
            <p class="judul">UD TRUCKS</p>
        </div>
    </div>
    <div class="teks">
        <p class="initext">UD Trucks adalah perusahaan otomotif yang berbasis di Jepang dan dikenal karena memproduksi truk dan kendaraan komersial berat. Mereka adalah anak perusahaan dari Volvo Group, sebuah perusahaan global yang terkemuka dalam industri otomotif. UD Trucks telah memainkan peran penting dalam pasar kendaraan komersial selama bertahun-tahun dan dikenal dengan kualitas, inovasi, dan keandalannya.</p>
        <p class="initext">UD Trucks memiliki sejarah panjang yang bermula pada tahun 1935 dan telah terus mengembangkan kendaraan komersial yang efisien dan kuat. Produk-produk mereka meliputi truk ringan, truk sedang, hingga truk berat, serta bus komersial. Mereka dikenal dengan desain yang ergonomis dan ramah pengemudi, membuat pengoperasian kendaraan menjadi lebih efisien dan nyaman.</p>
        <p class="initext">Selain itu, UD Trucks memiliki komitmen yang kuat terhadap keberlanjutan dan efisiensi. Mereka terus berinovasi untuk mengurangi dampak lingkungan dari kendaraan komersial mereka dan untuk membantu pelanggan mereka mengurangi biaya operasional. Dengan jaringan layanan purna jual yang luas, UD Trucks memberikan dukungan pelanggan yang berkualitas di seluruh dunia.</p>
        <p class="initext">UD Trucks telah mendapatkan reputasi sebagai pilihan utama di kalangan perusahaan transportasi dan industri konstruksi yang mengutamakan keandalan, efisiensi, dan kualitas. Dengan dukungan dari induk perusahaannya, Volvo Group, UD Trucks terus memimpin dalam industri kendaraan komersial global.</p>
    </div>
    <x-footer />
</body>

</html>