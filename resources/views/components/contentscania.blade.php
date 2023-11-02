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
            padding-top: 40px;
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
            <p class="judul">SCANIA</p>
        </div>
    </div>
    <div class="teks">
        <p class="initext">Scania adalah sebuah produsen truk dan bus terkemuka yang berkantor pusat di Södertälje, Swedia. Mereka telah membangun sejarah panjang yang mencakup lebih dari satu abad dalam industri otomotif. Scania terkenal dengan komitmen mereka terhadap inovasi dan teknologi yang memungkinkan mereka untuk menghasilkan kendaraan berkualitas tinggi yang efisien dan ramah lingkungan.</p>
        <p class="initext">Salah satu ciri khas Scania adalah fokus mereka pada keselamatan. Mereka telah mengembangkan berbagai fitur keselamatan canggih dalam kendaraan mereka, termasuk sistem pengereman canggih dan sistem bantuan pengemudi. Hal ini telah membuat Scania menjadi pilihan favorit di antara perusahaan transportasi yang mengutamakan keselamatan kru mereka.</p>
        <p class="initext">Scania juga dikenal sebagai pemimpin dalam hal keberlanjutan. Mereka telah berinvestasi dalam teknologi ramah lingkungan seperti kendaraan listrik dan bahan bakar alternatif, serta telah berkomitmen untuk mengurangi dampak lingkungan dari operasi mereka. Dengan fokus yang kuat pada efisiensi bahan bakar, Scania juga membantu pelanggan mereka mengurangi biaya operasional.</p>
        <p class="initext">Dengan jaringan layanan global yang kuat, Scania memastikan bahwa pelanggan mereka mendapatkan dukungan yang mereka butuhkan di seluruh dunia. Merek ini terus memimpin dalam industri truk dan bus, memberikan solusi transportasi yang canggih, andal, dan berkelanjutan.</p>
    </div>
    <x-footer />
</body>

</html>