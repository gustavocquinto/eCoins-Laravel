
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adicionar categorias</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<header>
@include('layouts.navigation')
<div class="main-div">
    <h1>Adicionar categoria</h1>
    <p>Adicione uma nova categoria ao Ecoin! Verifique as informações antes de salvar.</p>
  </div>
</header>
<main>
  <div class="edit-container">
    <div class="form-edit">
        <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

          <label for="name">Nome da categoria</label>
          <input type="text" name="name" id="name" placeholder="Nome da categoria">
        <button type="submit">Salvar</button>
      </form>
    </div>
  </div>
</main>
<div style="margin-bottom: 500px"> </div>
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

