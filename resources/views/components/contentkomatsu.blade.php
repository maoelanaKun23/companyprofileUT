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
            /* Vertically center the content */
            width: 80%;
            padding-left: 30px;
            padding-top: 30px;
        }

        .teks {
            width: 90%;
            padding-left: 50px;
            padding-top: 20px;
            margin-bottom: 40px;
        }

        .title {
            display: flex;
            /* Use flex display for inner alignment */
            /* Vertically center the text */

            height: 20px;
            flex: 1;
            /* Allow the text to take up remaining space */
        }

        .judul {
            color: #000;
            font-family: 'SFUIText-Regular', sans-serif;
            font-size: 40px;
            font-style: normal;
            font-weight: 800;
            line-height: 20px;
        }
        @media screen and (max-width: 1100px) {
            .bom {
                margin-top: -140px;
            }
        }
        @media screen and (max-width: 768px) {
            .bom {
                margin-top: -100px;
            }
        }
        @media screen and (max-width: 480px) {
            .bom {
                margin-top: -140px;
            }
        }

        .initext {
            text-align: justify;
        }
    </style>
</head>

<body>
    <div class="bom">
        <img src="{{ asset('assets/images/kuning.png') }}" alt="" class="img-fluid">
        <div class="title">
            <p class="judul">KOMATSU</p>
        </div>
    </div>
    <div class="teks">
        <p class="initext">Kami adalah sebuah perusahaan asal Jepang yang terkenal dalam industri konstruksi dan pertambangan. Kami didirikan pada tahun 1921 oleh Meitaro Takeuchi dan awalnya fokus pada pembuatan mesin landai pertanian. Namun, seiring berjalannya waktu, kami memperluas operasi kami ke peralatan berat dan mesin konstruksi.</p>
        <p class="initext">Kami dikenal sebagai produsen peralatan berat terkemuka di dunia. Produk-produk kami meliputi ekskavator hidrolik, buldoser, truk tambang, loader, crane, alat berat untuk konstruksi jalan, dan berbagai komponen peralatan konstruksi. Inovasi teknologi adalah salah satu ciri khas kami. Kami telah mengembangkan teknologi canggih seperti sistem kendali otomatis untuk truk tambang, ekskavator hibrida, dan solusi telematika yang memungkinkan pemantauan dan manajemen efisien dari peralatan berat kami.</p>
        <p class="initext">Kami adalah perusahaan internasional dengan kehadiran global. Kami memiliki kantor, fasilitas produksi, dan jaringan dealer di seluruh dunia. Hal ini memungkinkan kami untuk melayani berbagai industri, termasuk konstruksi, pertambangan, kehutanan, dan lainnya. Kemampuan kami untuk memberikan dukungan pelanggan di berbagai lokasi telah memperkuat posisi kami di pasar global.</p>
        <p class="initext">Kami juga menunjukkan komitmen terhadap keberlanjutan dan perlindungan lingkungan. Kami telah mengembangkan mesin yang lebih ramah lingkungan, seperti mesin yang lebih hemat bahan bakar dan sistem emisi yang lebih bersih, sebagai bagian dari upaya untuk mengurangi dampak lingkungan dari operasi kami. Sebagai pemain utama dalam industri peralatan berat dan konstruksi global, kami terus berinovasi untuk memenuhi kebutuhan pelanggan kami. Produk-produk kami digunakan dalam berbagai proyek konstruksi besar, tambang, dan industri lainnya di seluruh dunia.</p>
    </div>
    <x-footer />
</body>

</html>