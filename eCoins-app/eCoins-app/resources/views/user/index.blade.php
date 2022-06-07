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
            <h1>Perfil</h1>
            <p>Olá {{ Auth::user()->name }}, este é seu perfil.</p>
        </div>
    </header>
    <main>
        <p style="color: green;"> {{session()->get('sucess')}} </p>
        <form method="POST" action="{{route('perfil.edit')}}" enctype="multipart/form-data">
            @csrf
            <img src="{{asset(Auth::user()->image)}}">
            <input type="file" name="image">
            <label for="client"> Conta criada em:  </label>
            <input type="text" name="client" disabled="disabled" value="{{Auth::user()->created_at}}">
            <label for="name"> Nome </label>
            <input type="text" name="name" value="{{Auth::user()->name}}">
            <label for="email"> Email </label>
            <input type="text" name="email" disabled="disabled"value="{{Auth::user()->email}}">
            <label for="tel"> Telefone </label>
            <input type="text" name="tel" value="{{Auth::user()->tel}}">
            <button type="submit"> Salvar informações </button>
        </form>


    </main>


</body>
