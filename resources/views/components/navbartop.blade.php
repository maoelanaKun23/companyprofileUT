<!DOCTYPE html>
<html lang="en" class="html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    /* Common styles for both desktop and mobile */
    .test {
        position: absolute;
        top: 0;
        width: 100%;
        height: 18px;
        background: #F9F9F9;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 1000;
    }

    .nav-bar-top {
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .left-section {
        background: #F9F9F9;
    }

    .right-section {
        background: #F9F9F9;
        gap: 20px;
    }

    /* Responsive styles for smaller screens */
    @media (max-width: 768px) {
        .test{
            display: flex;
        }
        .nav-bar-top {
            
            display: flex;
        }

        .left-section,
        .right-section {
            display: flex;
            width: 100%;
            text-align: center;
        }
        .right-section{
            gap: 5px;
        }
    }
</style>

<body>
    <nav class="test navbar-expand-lg bg-body-tertiary">
        <div class="nav-bar-top">
            <div class="left-section">
                <img src="{{ asset('assets/images/cellphone.png') }}" alt="phone" class="src">
                <a href="https://utconnect.unitedtractors.com/">
                    Download UT Connect Mobile App
                </a>
            </div>
            <div class="right-section">
                <a href="https://utconnect.unitedtractors.com/">
                    About UT Connect
                </a>
                <a class="login" href="https://utconnect.unitedtractors.com/">How To Login</a>
            </div>
        </div>
    </nav>
</body>

</html>
