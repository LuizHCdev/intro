@extends('layouts.template')
@section ('title', 'Produtos')
@section('content')
<?php
$valor_prod = number_format($produto->valor, 2, ',','.');
?>
<div class="jumbotron">
     <h1 class="display-4"><?php echo $produto->nome; ?> </h1>
     <p class="lead"><?php echo $produto->descricao; ?>- valor R$<?php echo $valor_prod; ?></p>
    <hr class="my-4">
    <p><?php echo $produto->descricao_longa; ?></p>
 <!-- preciso colocar a descricao_longa dentro do banco  esta faltando esse campo !-->
      <a class="btn btn-primary btn-lg" href="{{route('produtos')}}" role="button">Ver produtos</a>
     </div>
     @endsection
