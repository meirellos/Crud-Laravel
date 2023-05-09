@extends('layouts.app')

@section('title', 'Painel Administrador com Laravel')

@section('contents')
<div class="row">
    <div class="col-md-12"> <p>Bem vindo ao painel de administrador</p></div>
    <div class="col-md-12"> <p>Clique aqui para ver a listagem de produtos.</p></div>
    <div class="col"><a href="{{ route('products') }}" class="btn btn-primary">Listagem de produtos</a></div>
    
</div>
@endsection