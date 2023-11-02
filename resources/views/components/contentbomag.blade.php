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
    </style>
</head>

<body>
    <div class="bom">
        <img src="{{ asset('assets/images/kuning.png') }}" alt="" class="img-fluid">
        <div class="title">
            <p class="judul">BOMAG</p>
        </div>
    </div>
    <div class="teks">
        <p class="initext">Kami adalah perusahaan yang sangat dihormati dalam industri peralatan konstruksi. Kami bermarkas di Jerman dan telah ada sejak tahun 1957. Kami terkenal dengan produksi mesin pemadat tanah, gilasan, penggetar, dan peralatan pemadat aspal yang berkualitas tinggi.</p>
        <p class="initext">Kami dikenal atas inovasi kami dalam teknologi pemadatan yang canggih, yang membantu proyek konstruksi untuk menciptakan fondasi dan permukaan yang kuat dan tahan lama. Kami terus menerus memperkenalkan sistem telematika dan kontrol otomatis untuk membantu kontraktor dalam meningkatkan efisiensi konstruksi.</p>
        <p class="initext">Selain itu, kami juga memiliki fokus pada keberlanjutan. Kami berupaya untuk mengurangi dampak lingkungan dari peralatan konstruksi kami dan meningkatkan efisiensi bahan bakar, mendukung praktik konstruksi yang lebih ramah lingkungan.</p>
        <p class="initext">Reputasi kami di pasar sangat baik, karena produk-produk kami dikenal dengan kualitas tinggi, keandalan, dan daya tahan. Sebagai salah satu pemimpin dalam industri peralatan konstruksi, kami memainkan peran penting dalam memastikan proyek konstruksi di seluruh dunia berhasil dengan baik.</p>
    </div>
    <x-footer />
</body>

</html>
