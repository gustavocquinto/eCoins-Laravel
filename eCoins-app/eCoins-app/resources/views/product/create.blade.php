
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultado</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<header>
@include('layouts.navigation')
<div class="main-div">
    <h1>Editar Produto</h1>
    <p>Adicione um novo Produto ao Ecoin! Verifique as informações antes de salvar.</p>
  </div>
</header>
<main>
  <div class="edit-container">
    <div class="form-edit">
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <fieldset>
          <label for="name">Nome Produto</label>
          <input type="text" name="name" id="name" placeholder="Nome do Produto">
        </fieldset>
        <fieldset>
          <label for="value">Valor</label>
          <input type="number" name="price" id="price" placeholder="Valor do Produto">
          <label for="stock">Quantidade</label>
          <input type="text" name="stock" id="stock" placeholder="Quantidade do Produto">
          <label for="image">Imagem do Produto</label>
          <input type="file" name="image" id="image" >
        </fieldset>
        <fieldset>
          <label for="description">Descrição</label>
          <textarea name="description" id="description" cols="30" rows="10"
            placeholder="Descrição do Produto"></textarea>
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
