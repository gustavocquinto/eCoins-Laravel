<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Painel Administrador </title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <header>
        @include('layouts.navigation')
        <main>
            <section class="userInfo">
                <div class="userInfo-container">
                    <div class="userInfo-img">
                        <form method="POST" action="{{route('perfil.edit')}}" enctype="multipart/form-data">
                            @csrf
                        <img src="{{asset(Auth::user()->image)}}"
                            alt="Foto do usuário(a) {{ Auth::user()->name }}" title="Foto do usuário(a) {{ Auth::user()->name }}">
                        <br>
                        <input name="image" type="file">

                    </div>
                    <br>
                        <div class="userInfo-text">
                            <p>Bem-vindo, {{ Auth::user()->name }}.</p>
                            <br>
                            <label style="display: block" for="name"> Nome: </label>
                            <input name="name" type="text"  value="{{ Auth::user()->name }}">
                            <label style="display: block" for="email"> Email: </label>
                            <input name="email" type="text"  value="{{ Auth::user()->email }}">
                            <label style="display: block" for="tel"> Telefone: </label>
                            <input name="tel" type="text"  value="{{ Auth::user()->tel }}">
                            <p>
                                <button class="edit-profile" type="submit"> Atualizar perfil </button>
                                <a style="color: green;" href="">{{session()->get('sucess')}} </a>
                            </p>
                        </div>
                    </form>
                </div>
            </section>
            <div class="details-order">
                <p>Numero do Pedido</p>
                <p>Data do Pedido</p>
                <p>Status do Pedido</p>
                <p>Valor Total</p>
            </div>
            @if(count($pedidos) == false)
            <section class="orders">
                <p> Você não tem nenhum pedido em andamento :( </p>
            </section>
            @else
            <section class="orders">
                @foreach($pedidos as $pedido)
                <details>
                    <summary>
                        <p>#{{$pedido->order_id}}</p>
                        <p>{{$pedido->created_at}}</p>
                        <p>{{$pedido->state}}</p>
                        <p>{{number_format($pedido->price * $pedido->units, 2, '.', ' ')}}</p>
                    </summary>
                    <div class="summary-content">
                            <img src="{{asset($pedido->productImage)}}">
                        <div class="summary-content-text">
                            <h1>{{$pedido->name}}</h1>
                            <p style="max-width:580px">Descrição do Produto: {{$pedido->description}}</p>
                            <p> Quantidade: {{$pedido->units}} </p>
                            <p>Valor unidade: {{number_format($pedido->price, 2, '.', ' ')}} </p>
                        </div>
                    </div>
                </details>
                @endforeach

            </section>
            @endif
        </main>

</body>
