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
            <p class="judul">TADANO</p>
        </div>
    </div>
    <div class="teks">
        <p class="initext">Tadano adalah produsen terkemuka dari peralatan pengangkat dan derek berbasis di Jepang. Perusahaan ini memiliki sejarah yang panjang dan prestasi cemerlang dalam industri konstruksi dan pengangkatan berat. Tadano dikenal di seluruh dunia karena pengembangan dan produksi derek dan peralatan pengangkat berkualitas tinggi yang memenuhi berbagai kebutuhan konstruksi dan industri lainnya.</p>
        <p class="initext">Tadano telah memainkan peran penting dalam menghadirkan inovasi di dunia peralatan pengangkat. Produk-produk mereka termasuk derek teleskopik, derek lattice boom, dan berbagai jenis peralatan pengangkat lainnya yang dapat mengangkat beban berat di berbagai kondisi dan lingkungan. Keandalan dan keamanan adalah fokus utama Tadano, sehingga produk-produk mereka sering digunakan dalam proyek konstruksi besar dan industri pengangkatan.</p>
        <p class="initext">Selain berfokus pada inovasi teknologi, Tadano juga memprioritaskan keberlanjutan dan efisiensi. Mereka telah mengembangkan peralatan yang ramah lingkungan dan mengurangi dampak lingkungan dalam operasi industri. Dengan jaringan layanan yang luas di seluruh dunia, Tadano memberikan dukungan teknis dan layanan purna jual yang berkualitas kepada pelanggan mereka.</p>
        <p class="initext">Tadano telah membangun reputasi yang kuat dalam hal keandalan dan kualitas produknya. Perusahaan ini sering menjadi pilihan utama dalam industri konstruksi, pertambangan, dan manufaktur yang memerlukan peralatan pengangkat berkualitas tinggi dan andal. Dengan inovasi terus-menerus, Tadano terus memimpin dalam industri peralatan pengangkat global.</p>
    </div>
    <x-footer />
</body>

</html>