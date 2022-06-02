<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$products['name']}} - ECOIN</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>

<body>
    <header>
          @include('layouts.navigation')
    </header>
    <main>
        <div class="container-product">
            <div class="product-image">
                <img src="{{ asset("images/Rectangle 44.png") }}" alt="Personagem do Counter Strike GO"
                    title="Personagem do Counter Strike Go">
            </div>
            <div class="product-text">
                <h1>{{$products['name']}}</h1>
                <p>{{$products['description']}}</p>
                <p>R$ <span>{{$products['price']}}</span></p>
                <div class="buttons-product">
                    <button type="submit">Adicionar ao carrinho</button>
                    <button type="submit">Comprar agora</button>
                </div>

            </div>
</body>

</html>
