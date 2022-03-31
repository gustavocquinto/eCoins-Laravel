@extends("layouts.app")
@section("content")

<img style="width:100px" src="https://previews.123rf.com/images/ionutparvu/ionutparvu1612/ionutparvu161200410/67602131-categories-stamp-sign-text-word-logo-red-.jpg"><h1> ESTE É O INDEX DE CATEGORIA </h1>
<div>
    {{session()->get('sucess')}}

</div>
<div class="d-flex flex-row-reverse bd-highlight">
    <a class="btn btn-primary" href="{{route('category.create')}}" role="button">CRIAR CATEGORIA</a>
  </div>

<table class="table">
    <thead>
        <tr>
            <th> Nome da categoria </td>
            <th> Adicionada em </td>
        </tr>
    </thead>
    <tbody>
        @if(count($categories) == false)
            <tr>
                <td class="text-center" style="color:red;"> Não há categorias registradas</td>
            </tr>
        @else

            @foreach($categories as $category)
            <tr>
                <td> {{$category->name}} </td>
                <td> {{$category->created_at}} </td>
                <td><a href="{{route('category.edit', $category->id)}}" class="btn btn-secondary"> Editar </a> </td>
                <td><a href="{{route('category.destroy', $category->id)}}" class="btn btn-danger"> Apagar </a> </td>
            </tr>
            @endforeach
        @endif

    </tbody>
</table>
@endsection
