@extends("layouts.css")

<form class="container" method="POST" action="{{route('product.create')}}">
    @csrf
        <div class="form-group form-group w-25 p3 row mx-auto mb-3">
        <label for="exampleFormControlInput1">Nome do Produto</label>
        <input type="text" name="name"class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group form-group w-25 p3 row mx-auto mb-3">
            <label for="exampleFormControlInput1">Preço</label>
            <input name="price"  type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group form-group w-25 p3 row mx-auto mb-3">
            <label for="exampleFormControlInput1">Quantidade</label>
            <input name="stock"  type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group form-group w-25 p3 row mx-auto mb-3">
            <label for="category"> Selecione uma categoria </label>

            <select name="category_id" name="category" class="form-select form-select-sm">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

        </div>
        <div class="form-group w-25 p3 row mx-auto">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea name="description"  placeholder="Digite a descrição do produto" class="form-control mb-3" id="exampleFormControlTextarea1" rows="3"></textarea>
        <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </div>

  </form>
