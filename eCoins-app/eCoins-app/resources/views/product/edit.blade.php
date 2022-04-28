@extends("layouts.css")
<div>
    {{session()->get('sucess')}}
</div>
<form method="POST" action="{{route('product.update', $product->id)}}">
    @csrf
    @method('put')
    <div class="form-group form-group w-25 p3 row mx-auto mb-3">
        <label for="exampleFormControlInput1">Nome do Produto</label>
        <input type="text" value="{{$product->name}}"name="name"class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
      <div class="form-group form-group w-25 p3 row mx-auto mb-3">
          <label for="exampleFormControlInput1">Preço</label>
          <input name="price" value="{{$product->price}}" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group form-group w-25 p3 row mx-auto mb-3">
          <label for="exampleFormControlInput1">Quantidade</label>
          <input name="stock" value="{{$product->stock}}" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group form-group w-25 p3 row mx-auto mb-3">
            <label for="category"> Selecione uma categoria </label>

            <select name="category_id" class="form-select form-select-sm">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

        </div>
      <div class="form-group w-25 p3 row mx-auto mb-3">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <input style="width:330px; height:100px" name="description" value="{{$product->description}}" class="form-control" id="exampleFormControlTextarea1" rows="3">
        <button type="submit" class="btn btn-success">Enviar</button>
      </div>
      <br>


  </form>
