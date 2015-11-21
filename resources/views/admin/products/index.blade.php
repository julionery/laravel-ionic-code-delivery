@extends('app')

@section('content')
    <div class="container">
        <h1>Produtos</h1>
        <hr>
        <a href="{{ route('admin.products.create') }}" class="btn btn-default">Novo Produto</a>
        <br><br>
        <table class="table table-bordered table-responsive table-striped table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Categoria</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th style="width: 135px" class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td class="text-center">
                        <a href="{{route('admin.products.edit', ['id'=>$product->id])}}" class="btn btn-default btn-sm btn-warning">
                            Editar
                        </a>
                        <a href="{{route('admin.products.destroy', ['id'=>$product->id])}}" class="btn btn-default btn-sm btn-danger">
                            Excluir
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $products->render() !!}
    </div>
@endsection