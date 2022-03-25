@extends("layouts.css")

<form method="POST" action="{{route('product.create')}}">
    @csrf
    <div class="form-group form-group w-25 p3">
      <label for="exampleFormControlInput1">Nome do Produto</label>
      <input type="text" name="name"class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    <div class="form-group form-group w-25 p3">
        <label for="exampleFormControlInput1">Preço</label>
        <input name="price"  type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
      <div class="form-group form-group w-25 p3">
        <label for="exampleFormControlInput1">Quantidade</label>
        <input name="stock"  type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
    <div class="form-group w-25 p3">
      <label for="exampleFormControlTextarea1">Descrição</label>
      <textarea name="description"  placeholder="Digite a descrição do produto" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-success">Enviar</button>
  </form>
