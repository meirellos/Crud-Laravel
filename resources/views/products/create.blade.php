@extends('layouts.app')

@section('title', 'Criar produto')

@section('contents')
    <h1 class="mb-0">Adicionar Produto</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="image" class="form-control" placeholder="Imagem">
            </div>
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Nome">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Preço">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Código do Produto">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descrição"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
        </div>
    </form>
@endsection
