<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index - ECOIN</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" />
</head>

<body>
    <header>
        @include('layouts.navigation')
        <div class="main-video">
            <h1>ECOIN - SUA LOJA PREFERIDA GAMER</h1>
            <video src="images/valorant-video.mp4" id="vid" autoplay loop></video>
        </div>
    </header>
    <main>
        <h1>Produtos</h1>
        @include('components.game-card')
    </main>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript">
        $('.products').slick({
         
        });
    </script>
</body>
