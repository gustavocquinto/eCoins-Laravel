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
                        <img src="https://blog.unyleya.edu.br/wp-content/uploads/2017/12/saiba-como-a-educacao-ajuda-voce-a-ser-uma-pessoa-melhor.jpeg"
                            alt="Foto do usuário(a) {{ Auth::user()->name }}" title="Foto do usuário(a) {{ Auth::user()->name }}">
                    </div>
                    <div class="userInfo-text">
                        <h1>Bem-vinde, {{ Auth::user()->name }}</h1>
                        <p>{{ Auth::user()->email }}</p>
                        <p>Telefone: {{ Auth::user()->tel }}</p>
                        <p>
                            <a href="{{ url("#") }}" class="edit-profile">Editar Perfil</a>
                        </p>
                    </div>
                </div>
            </section>
            <div class="details-order">
                <p>Numero do Pedido</p>
                <p>Data do Pedido</p>
                <p>Status do Pedido</p>
                <p>Valor Total</p>

            </div>
            <section class="orders">
                <details>
                    <summary>
                        <p>#001</p>
                        <p>01/01/2020</p>
                        <p>Concluido</p>
                        <p>2000 Reais</p>
                    </summary>
                    <div class="summary-content">
                            <img src="https://blog.unyleya.edu.br/wp-content/uploads/2017/12/saiba-como-a-educacao-ajuda-voce-a-ser-uma-pessoa-melhor.jpeg"
                                alt="User" title="User">
                        <div class="summary-content-text">
                            <h1>Nome do Produto</h1>
                            <p>Descrição do Produto</p>
                            <p>Quantidade: 1</p>
                            <p>Valor: 2000 Reais</p>
                        </div>
                    </div>
                </details>

            </section>
        </main>
</body>
