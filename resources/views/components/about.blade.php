<!DOCTYPE html>
<html lang="en" class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <style>
        /* CSS untuk tombol beli */
        .buy-button {
            background-color: #f0d000;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 40%;
            text-align: center;
        }

        .buy-button:hover {
            background-color: gold;
        }

        /* CSS untuk tombol "Lihat Selengkapnya" responsif */
        @media (max-width: 768px) {
            .buy-button {
                padding: 8px 16px; /* Mengurangi padding pada tombol */
                width: 60%; /* Mengurangi lebar tombol */
            }
        }

        @media (max-width: 480px) {
            .buy-button {
                padding: 6px 12px; /* Mengurangi padding lebih banyak pada tombol */
                width: 80%; /* Mengurangi lebar tombol lebih banyak */
            }
        }
    </style>
    <title>First Content</title>
</head>
<body>
    <div class="contain">
        <div class="cont2">
            <img src="{{ asset('assets/images/about.jpg') }}" alt="bomag" class="bomag">
            <div class="textleft contentslidein">
                <p class="texthead">SEKILAS PERUSAHAAN</p>
                <hr class="hr">
                <!-- <a href="https://utconnect.unitedtractors.com/PartOnlineTransaction/Catalog/BOMAG" class="href">
                    <button class="buy-button">Lihat Selengkapnya ...</button>
                </a> -->
            </div>
        </div>
    </div>
</body>
</html>
