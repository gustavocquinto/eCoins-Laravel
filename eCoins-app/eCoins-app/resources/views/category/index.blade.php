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
            <h1>Categorias</h1>
            <p>Verifique e crie novas categorias no site.</p>
            <button type="submit"><a href="{{route('category.create')}}">Criar Categoria</a></button>
        </div>
    </header>
    <main>

        <div class="table-container">
            <div class="table-content">
                <p>ID</p>
                <p>Nome da Categoria</p>
                <p>Numero de Produtos</p>
                <p>Ações</p>
            </div>
            @if (count($categories) == false)
                <p class="noProduct">Nenhuma Categoria Cadastrado</p>
            @else
            @foreach($categories as $category)
                <div class="table-content">
                    <p>{{$category->id}}</p>
                    <p>{{$category->name}}</p>
                    <p>{{$category}}</p>
                    <p>
                        <a href="{{ route('product.edit', $category->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('product.destroy', $category->id) }}">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                </div>
            @endforeach
@endif
        </div>
    </main>


</body>
