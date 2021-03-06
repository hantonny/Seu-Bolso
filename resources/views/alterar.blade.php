@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5 mb-5">
            <div class="card">
                <div class="card-body">
                    @if (session('status') && count($lista)>0)
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container">

<form method="POST" class="form">
{{csrf_field()}}
            <h1 class="font-weight-bold text-success">Editar <span class="font-weight-bold text-primary">Transação</span></h1>
            <div class="row">
 			<div class="form-group mb-2 mx-sm-3">
 			<label><strong>Tipo de Transação</strong></label>
 			<select class="form-control col-12" id="tipo" name="tipo" required="">
 				<option>Escolha Transação</option>
				 @if($resultado->tipo == 0)
				<option value="{{$resultado->tipo}}" selected>Despesas</option>
 				<option value="1">Receita</option>
				@endif
				@if($resultado->tipo == 1)
				<option value="{{$resultado->tipo}}" selected>Receita</option>
 				<option value="0">Despesas</option>
				@endif
 			</select>
 			</div>
 			<div class="form-group mb-2 mx-sm-3">
 				<label><strong>Valor</strong></label>
 				<input class="form-control col-12" type="text" pattern="[0-9.,]{1,}" id="valor" name="valor" required="" value="{{$resultado->valor}}">
 			</div>
 			<div class="form-group mb-2 mx-sm-3">
 				<label><strong>Descrição</strong></label>
 				<input class="form-control col-12" type="text" name="descricao" id="descricao" required="" value="{{$resultado->descricao}}">
 			</div>
            <div class="form-group mb-2 mx-sm-3">
 				<label><strong>Data</strong></label>
 				<input class="form-control col-12" type="date" name="data_transacao" id="data_transacao" required="" value="{{$resultado->data_transacao}}">
 			</div>
			<div class="form-group mb-2 mx-sm-3">
 			<label><strong>Categoria</strong></label>
 			<select class="form-control col-12" id="nome_categoria" name="nome_categoria" required="">
			@foreach($categoria as $cate)
				<option value="{{$cate->nome_categoria}}">{{$cate->nome_categoria}}</option>
        	@endforeach
             </select>

             </div>
            </div>
            <a href="{{route('home')}}" class="btn btn-secondary mt-2 text-uppercase font-weight-bold">Voltar</a>
            <button type="submit" class="btn btn-success font-weight-bold mt-2">SALVAR</button>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@endsection















