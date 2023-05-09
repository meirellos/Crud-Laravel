@extends('layouts.app')

@section('title', 'Mostrar Produto')

@section('contents')
<h1 class="mb-0">Detail Product</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Imagem</label>
        <input type="text" name="image" class="form-control" placeholder="Imagem do Produto" value="{{ $product->image }}">
    </div>
    <div class="col mb-3">
    <div class="col mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="title" class="form-control" placeholder="Nome" value="{{ $product->title }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Preço</label>
        <input type="text" name="price" class="form-control" placeholder="Preço" value="{{ $product->price }}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Código do Produto</label>
        <input type="text" name="product_code" class="form-control" placeholder="Código do Produto" value="{{ $product->product_code }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Descrição</label>
        <textarea class="form-control" name="description" placeholder="Descrição" readonly>{{ $product->description }}</textarea>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-label">Criado Em</label>
        <input type="text" name="created_at" class="form-control" placeholder="Criado Em" value="{{ $product->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Atualizado Em</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Atualizado Em" value="{{ $product->updated_at }}" readonly>
    </div>
</div>
@endsection