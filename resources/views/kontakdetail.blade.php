<html lang="en" class="html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>United Tractors</title>
</head>
<style>
    .cont {
        max-width: 100%;
        max-height: 100%;
        margin: 0 auto;
        overflow: hidden;
        scroll-behavior: smooth;
    }
</style>

<body>
    <div class="cont">
        <x-navbar title="Menu Utama" />
        <x-kontak />
        <x-contentkontak/>
        <!-- <x-footer /> -->
    </div>
</body>

</html>