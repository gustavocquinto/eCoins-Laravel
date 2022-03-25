@extends("layouts.css")

<form method="POST" action="{{route('category.store')}}">
    @csrf
    <div class="form-group form-group w-25 p3">
      <label for="exampleFormControlInput1">Nome da Categoria</label>
      <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Enviar</button>
  </form>
