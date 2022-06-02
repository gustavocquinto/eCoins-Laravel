<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $products['name'] }} - ECOIN</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        @include('layouts.navigation')
    </header>
    <main>
        <div class="container-product">
            <div class="product-image">
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/25627d58-d99c-4ac7-a6fe-7a4bb329f3f5/d6g9sop-87c3ff54-8c75-41a6-afd4-3e16229a2b16.png/v1/fill/w_400,h_1024,strp/battlefield_4___pac_render_by_ashish913_by_ashish_kumar_d6g9sop-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAyNCIsInBhdGgiOiJcL2ZcLzI1NjI3ZDU4LWQ5OWMtNGFjNy1hNmZlLTdhNGJiMzI5ZjNmNVwvZDZnOXNvcC04N2MzZmY1NC04Yzc1LTQxYTYtYWZkNC0zZTE2MjI5YTJiMTYucG5nIiwid2lkdGgiOiI8PTQwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.Tv8bA6iocpXlUhohWL8qhILMzMQqT21csdMzYGUycu0"
                    alt="Imagem do Produto" title="Imagem do Produto">
            </div>
            <div class="product-text">
                <h1>{{ $products['name'] }}</h1>
                <p>{{ $products['description'] }}</p>
                <p>R$ <span>{{ $products['price'] }}</span></p>
                <div class="buttons-product">
                    <button type="submit">Adicionar ao carrinho</button>
                    <button type="submit">Comprar agora</button>
                </div>
            </div>

        </body>

</html>
