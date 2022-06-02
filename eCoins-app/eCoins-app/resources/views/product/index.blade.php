@extends("layouts.app")
@section("content")
<h1> ESTE É O INDEX DE PRODUTO </h1>
<div>
    <p style="color: green"> {{session()->get('sucess')}} </p>
    <p style="color: red;"> {{session()->get('noAccess')}} </p>
</div>

<div class="d-flex flex-row-reverse bd-highlight">
    @if(Auth::check() && Auth::user()->admin == 1)
    <a class="btn btn-primary" href="{{route('product.create')}}" role="button">CRIAR PRODUTO</a>
    @endif
  </div>

<table class="table">
    <thead>
        <tr>
            <th> Nome produto </td>
            <th> Quantidade </th>
            <th> Preco </>
            <th> Categoria </th>
            <th> Descricao </td>
            @if(Auth::check() && Auth::user()->admin)
            <th> Editar </td>
            <th> Apagar </td>
            @endif
        </tr>
    </thead>
    <tbody>
        @if(count($products) == false)
            <tr>
                <td class="text-center" style="color:red;"> Não há produtos registrados</td>
            </tr>
        @else

            @foreach($products as $product)

            <tr>
                <td> {{$product->name}} </td>
                <td> {{$product->stock}} </td>
                <td> {{$product->price}} </td>
                <td> {{$product->category_id}} </td>
                <td> {{$product->description}} </td>
                @if(Auth::check() && Auth::user()->admin)
                <td><a href="{{route('product.edit', $product->id)}}" class="btn btn-secondary"> Editar </a> </td>
                <td><a href="{{route('product.destroy', $product->id)}}" class="btn btn-danger"> Apagar </a> </td>
                @endif
            </tr>

            @endforeach
        @endif

    </tbody>
</table>
@endsection
