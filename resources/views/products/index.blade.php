@extends('layouts.app')

@section('title', 'Página de Produto')

@section('contents')

    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Lista de Produtos</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Adicionar Produto</a>
    </div>
    <hr />

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Código do Produto</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @if ($product->count() > 0)
                @foreach ($product as $result)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle"> <img src=" {{ $result->image }} " style="width:150px; border: 1px solid #dedede; border-radius: 10px; "></td>
                        <td class="align-middle">{{ $result->title }}</td>
                        <td class="align-middle">{{ $result->price }}</td>
                        <td class="align-middle">{{ $result->product_code }}</td>
                        <td class="align-middle">{{ $result->description }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $result->id) }}" type="button"
                                    class="btn btn-secondary">Detalhes</a>
                                <a href="{{ route('products.edit', $result->id) }}" type="button"
                                    class="btn btn-warning">Editar</a>
                                    <form action="{{ route('products.destroy', $result->id) }}" method="POST" type="button"
                                        class="btn btn-danger p-0" onsubmit="return confirm('Tem certeza que deseja deletar?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger m-0">Deletar</button>
                                    </form>
                                
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Produto não encontrado</td>
                </tr>
            @endif
        </tbody>
    </table>

@endsection
