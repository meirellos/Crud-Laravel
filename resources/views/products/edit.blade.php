@extends('layouts.app')

@section('title', 'Editar Produto')

@section('contents')

    <h1 class="mb-0">Editar Produto</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Imagem</label>
                <input type="text" name="image" class="form-control" placeholder="Imagem do Produto"
                    value="{{ $product->image }}">
                <p>Imagem atual: </p>
                <img src=" {{ $product->image }} " style="width:150px; border-radius: 7px solid #dedede">
            </div>
            <div class="col mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="title" class="form-control" placeholder="Nome" value="{{ $product->title }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Preço" value="{{ $product->price }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Código do Produto</label>
                <input type="text" name="product_code" class="form-control" placeholder="Código do Produto"
                    value="{{ $product->product_code }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Descrição</label>
                <textarea class="form-control" name="description" placeholder="Descrição">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Atualizar</button>
            </div>
        </div>
    </form>

@endsection
