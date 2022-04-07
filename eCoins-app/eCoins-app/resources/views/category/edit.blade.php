@extends("layouts.css")
<div>
    {{session()->get('sucess')}}
</div>
<form method="POST" action="href="{{route('category.destroy', $category->id)}}>
    @csrf
    @method('put')
    <div class="form-group form-group w-25 p3">
        <label for="exampleFormControlInput1">Nome da Categoria</label>
        <input type="text" value="{{$category->name}}"name="name"class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
      <br>
      <button type="submit" class="btn btn-success">Enviar</button>
  </form>
