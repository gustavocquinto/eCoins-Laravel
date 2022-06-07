
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar categoria</title>
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
        <form action="{{route('category.update', $category)}}" method="POST" enctype="multipart/form-data">
            @csrf

          <label for="name">Nome da categoria</label>
          <input type="text" name="name" id="name" value="{{$category->name}}">
        <button type="submit">Salvar</button>
      </form>
    </div>
  </div>
</main>
