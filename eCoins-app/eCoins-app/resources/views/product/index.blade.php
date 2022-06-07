<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Criar Produto</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <header>
        @include('layouts.navigation')
        <div class="main-div">
            <h1>Produtos</h1>
            <p>Verifique todos os produtos cadastrados no site.</p>
            <p style="color: red; font-shadow: 3px 2x 3x black;"> {{session()->get('noAccess')}} </p>
            <button type="submit"><a href="{{route('product.create')}}">Criar Produto</a></button>
        </div>
    </header>
    <main>

        <div class="table-container">
            <div class="table-content">
                <p>ID</p>
                <p>Nome do Produto</p>
                <p>Valor</p>
                <p>Quantidade</p>
                <p>Categoria</p>
                <p>Ações</p>
            </div>
            @if (count($products) == false)
                <p class="noProduct">Nenhum Produto Cadastrado</p>
            @else
            @foreach($products as $product)
                <div class="table-content">
                    <p>#0001</p>
                    <p>{{$product->name}}</p>
                    <p>R$ {{$product->price}}</p>
                    <p>{{ $product->stock }}</p>
                    <p>{{ $product->category_id }} </p>
                    <p>
                        <a href="{{ route('product.edit', $product->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('product.destroy', $product->id) }}">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                </div>
            @endforeach
@endif
        </div>
    </main>


</body>
