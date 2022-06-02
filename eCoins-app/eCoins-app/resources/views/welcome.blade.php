<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index - ECOIN</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

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
        <h1>Resultado da Busca</h1>
        <section class="products">
            @foreach($products as $product)
            <div class="card">
                <div class="imgBox">
                    <img src=""
                        alt="" class="product">
                </div>
                <div class="contentBox">
                    <h3>{{$product['name']}}</h3>
                    <h2 class="price">R$ {{$product['price']}}</h2>
                    <a href="detail/{{$product['id']}}" class="buy">Comprar</a>
                </div>
            </div>
            @endforeach
        </section>
    </main>
    <footer>
        <p>&copy; ECOIN - SENAC - 2022</p>
    </footer>
</body>
