<!DOCTYPE html>
<html lang="en" class="html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/spirit.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .row {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            /* display: flex;
            flex-direction: column; */
            height: 100%;
        }

        .card-img-top {
            max-width: 100%;
            height: auto;

        }

        .bungkus {
            padding: 0 10px 0 10px;
            cursor: pointer;
            height: auto;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="row g-4 bungkus">
        <div class="col">
            <div class="card">
                <img src="{{ asset('assets/images/mes.jpg') }}" class="card-img-top" alt="mesin konstruksi">
                <div class="card-body">
                    <h5 class="card-title">Mesin Konstruksi</h5>
                    <p class="card-text">Pilar usaha Mesin Konstruksi berfokus pada penjualan alat berat dan alat transportasi...</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{ asset('assets/images/pe.jpeg') }}" class="card-img-top" alt="pertambangan">
                <div class="card-body">
                    <h5 class="card-title">Pertambangan</h5>
                    <p class="card-text">United Tractors berkomitmen untuk menghasilkan nilai tambah yang berkelanjutan melalui...</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{ asset('assets/images/ene.jpg') }}" class="card-img-top" alt="Energi">
                <div class="card-body">
                    <h5 class="card-title">Energi</h5>
                    <p class="card-text">Sejalan dengan strategi pengembangan usaha di sektor energi yang ramah lingkungan, United...</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{ asset('assets/images/kontraktor.jpg') }}" class="card-img-top" alt="Kontraktor">
                <div class="card-body">
                    <h5 class="card-title">Industri Konstruksi</h5>
                    <p class="card-text">Sebagai salah satu kontribusi dalam pencapaian SDG’s (Sustainability Development Goals), United...</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>