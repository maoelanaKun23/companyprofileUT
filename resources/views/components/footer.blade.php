<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<style>
    /* CSS untuk footer */
    footer {
        background-color: black;
        color: white;
        padding: 10px;
    }

    .p {
        background-color: black;
        color: white;
        padding: 10px;
        text-align: center;
    }

    .foot-bot {
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .bot-1 {
        width: auto;
        margin-left: 20px;
    }

    .bot-2 {
        width: auto;
        margin-right: 20px;
    }

    /* CSS untuk mengatur ukuran ikon */
    .fa,
    .fab {
        color: #fff;
        font-size: 24px;
        /* Sesuaikan dengan ukuran yang Anda inginkan */
        margin: 5px;
        /* Untuk memberikan sedikit jarak antara ikon */
    }

    .ut {
        width: 100%;
        text-align: left;
        margin: 30px 0 0 30px;
    }

    .text-ut {
        color: #f6ce00;
        font-family: 'SFUIText-Regular', sans-serif;
        font-size: 20px;
        font-style: normal;
        font-weight: 650;
        line-height: 20px;
    }

    .tulisan-biasa {
        color: #fff;
        font-family: 'SFUIText-Regular', sans-serif;
        font-size: 15px;
        font-style: normal;
        font-weight: 600;
    }

    /* Media query untuk responsif */
    @media (max-width: 768px) {
        .foot-bot {
            flex-direction: column; /* Mengubah tata letak menjadi tumpuk di bawah ketika lebar layar lebih kecil dari 768px */
            text-align: center;
        }
        .bot-1, .bot-2 {
            width: 100%; /* Mengisi seluruh lebar ketika tumpuk di bawah */
            margin: 10px 0; /* Memberikan jarak antara elemen */
        }
    }
</style>

<body>
    <footer>
        <div class="ut">
            <p class="text-ut">PT United Tractors Tbk</p>
            <p class="tulisan-biasa">
                Jl. Raya Bekasi Km 22,<br />
                Cakung, Jakarta Timur<br />
                Indonesia, 13910<br />
                Phone +62 21 2457 9999
            </p>
        </div>
        <div class="foot-bot">
            <div class="bot-1">
                <img src="{{ asset('assets/images/utputih.png') }}" alt="" class="img-fluid">
            </div>
            <div class="bot-2">
                <a href="link_youtube" target="_blank" class="fa fa-youtube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="link_facebook" target="_blank" class="fa fa-facebook">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="link_instagram" target="_blank" class="fa fa-instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="link_linkedin" target="_blank" class="fa fa-linkedin">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
        <p class="p">&copy; 2023 United Tractors all right reserved.</p>
    </footer>
</body>

</html>
