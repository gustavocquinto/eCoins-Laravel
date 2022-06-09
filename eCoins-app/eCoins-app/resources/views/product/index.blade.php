<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produtos</title>
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
            @if (Auth::user()->admin == 1)
            <button type="submit"><a href="{{route('product.create')}}">Criar Produto</a></button>
            @endif
        </div>
    </header>
    <main>
            @if (count($products) == false)
                <p class="noProduct">Nenhum Produto Cadastrado</p>
            @else
            <table>
                <tr>
                  <th>ID</th>
                  <th>Imagem</th>
                  <th>Nome Produto</th>
                  <th>Valor</th>
                  <th>Estoque</th>
                  @if(Auth::user()->admin == 1)
                  <th>Ações</th>
                  @endif
                </tr>
                @foreach ($products as $product)
                <tr>
                  <td>#{{$product->id}}</td>
                    <td><img src="{{asset($product->image)}}" alt="Produto 1" /></td>
                    <td>{{$product->name}}</td>
                    <td>R$ {{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    @if(Auth::user()->admin == 1)
                    <td class="actions">
                        <a href="{{ route('product.edit', $product->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('product.destroy', $product->id) }}">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                    @endif
                </tr>
                @endforeach
              </table>
            @endif
        </div>
    </main>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-content-title">
                NAVEGUE PELO SITE
            </div>
            <div style="cursor: pointer" onclick="location.href='../Login/menu.php'" class="footer-content-item">
                PÁGINA INICIAL
            </div >
            <div class="footer-content-item">
                CRÉDITOS CSGO
            </div >
            <div class="footer-content-item">
                CRÉDITOS PARA LOL
            </div >
            <div class="footer-content-item">
                CRÉDITOS PARA FORTNITE
            </div >
        </div>
        <div class="footer-content">
            <div class="footer-content-title">
                ENTRE EM CONTATO CONOSCO
            </div>
            <div class="footer-content-item">
                Email: leonnardo1588@gmail.com
            </div>
            <div class="footer-content-item">
                Precisa de suporte? <a href="#"> Clique Aqui</a>
            </div>
            <div class="footer-content-item">
                Tel:(11) 5555-5555
            </div>
        </div>
        <div class="footer-content">
            <div class="footer-content-title">
                REDES SOCIAIS
            </div>
            <div class="footer-content-item">
                Facebook
            </div>
            <div class="footer-content-item">
                Instagram
            </div>
            <div class="footer-content-item">
                Twitter
            </div>
        </div>
    </footer>



</body>
