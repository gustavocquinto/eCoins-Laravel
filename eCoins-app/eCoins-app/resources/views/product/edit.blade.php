
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adicionar produto</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<header>
@include('layouts.navigation')
<div class="main-div">
    <h1>Adicionar produto</h1>
    <p>Adicione um novo Produto ao Ecoin! Verifique as informações antes de salvar.</p>
  </div>
</header>
<main>
  <div class="edit-container">
    <div class="form-edit">
        <form action="{{route('product.update', $products->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
        <fieldset>
          <label for="name">Nome Produto</label>
          <input type="text" name="name" id="name" value="{{$products->name}}">
        </fieldset>
        <fieldset>
          <label for="value">Valor</label>
          <input type="number" name="price" id="price" value="{{$products->price}}">
          <label for="stock">Quantidade</label>
          <input type="text" name="stock" id="stock" value="{{$products->stock}}">
          <label for="image">Imagem do Produto</label>
          <input type="file" name="image" id="image" >
        </fieldset>
        <fieldset>
          <label for="description">Descrição</label>
          <textarea maxlength="130" name="description" id="description" cols="30" rows="10"
          placeholder="{{$products->description}}" required></textarea>
          <label for="category">Categoria:</label>
          <select name="category_id" id="category">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{ $category->name }}</option>
            @endforeach
        </select>
        </fieldset>
        <button type="submit">Salvar</button>
      </form>
    </div>
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

