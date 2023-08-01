@extends('layouts.template')
@section('title', 'Criar Produto')
@section('content')
    <div class="container mt-4">
        <form method="POST" action="{{route('produtos.editar', [$produto->id])}}">
            <!-- coloquei um metodo post dentro do formulario ele precisa passar por uma rota entao a acao e pasar no caso pelo produtos.inserir !-->
            @csrf
            @method('PUT');

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" class="form-control" id="" name="nome" value="{{$produto->nome}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Valor</label>
                        <input type="text" class="form-control" id="" name="valor" value="{{$produto->valor}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Estoque</label>
                        <input type="text" class="form-control" id="" name="estoque" value="{{$produto->estoque}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">descricao</label>
                <textarea class="form-control" id="" name="descricao" rows="3">{{$produto->descricao}}</textarea>
            </div>

    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
@endsection
