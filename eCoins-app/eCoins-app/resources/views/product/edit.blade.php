@extends("layouts.css")
<div>
    {{session()->get('sucess')}}
</div>
<form method="POST" action="{{route('product.update', $product->id)}}">
    @csrf
    @method('put')
    <div class="form-group form-group w-25 p3">
        <label for="exampleFormControlInput1">Nome do Produto</label>
        <input type="text" value="{{$product->name}}"name="name"class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
      <div class="form-group form-group w-25 p3">
          <label for="exampleFormControlInput1">Preço</label>
          <input name="price" value="{{$product->price}}" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group form-group w-25 p3">
          <label for="exampleFormControlInput1">Quantidade</label>
          <input name="stock" value="{{$product->stock}}" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
      <div class="form-group w-25 p3">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea name="description" value="" placeholder="{{$product->description}}" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <br>
      <button type="submit" class="btn btn-success">Enviar</button>
  </form>
