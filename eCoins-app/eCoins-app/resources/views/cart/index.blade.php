<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrinho</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <header>
        @include('layouts.navigation')
        <div class="main-div">
            <h1>Carrinho</h1>
            <p>Este é seu carrinho de compras.</p>
        </div>
    </header>
    <main>
        <p style="color: green;"> {{session()->get('removed')}} </p>
        <p style="color: red;"> {{session()->get('error')}} </p>
        <div class="table-container">
            <div class="table-content">
                <p>Nome do Produto</p>
                <p>Valor</p>
                <p>Quantidade</p>
            </div>
            @if (count($itens) == false)
                <p class="noProduct">Parece que você ainda não tem nenhum produto no seu carrinho :( </p>
            @else
            @foreach($itens as $item)
                <div class="table-content">
                    <p>{{$item->Product->name}}</p>
                    <p>R$ {{$item->Product->price}}</p>

                    <form action="{{route('cart.store', $item->Product->id) }}" method="POST" style="display:inline">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">+</button>
                    </form>
                    <p>{{ $item->units }}</p>
                    <form action="{{ route('cart.destroy', $item->Product->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-primary btn-sm">-</button>
                    </form>
                </div>
            @endforeach
@endif
        </div>
    </main>


</body>
