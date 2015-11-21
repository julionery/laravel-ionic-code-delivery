@extends('app')

@section('content')
    <div class="container">
        <h1>Categorias</h1>
        <hr>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-default">Nova Categoria</a>
        <br><br>
        <table class="table table-bordered table-responsive table-striped table-hover">
            <thead>
            <tr>
                <th style="width: 60px">ID</th>
                <th>Nome</th>
                <th style="width: 135px" class="text-center">Ações</th>
            </tr>
            </thead>

            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{route('admin.categories.edit', ['id'=>$category->id])}}" class="btn btn-default btn-sm btn-warning">
                            Editar
                        </a>
                        <a href="{{route('admin.categories.destroy', ['id'=>$category->id])}}" class="btn btn-default btn-sm btn-danger">
                            Excluir
                        </a>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <div align="left">
            {!! $categories->render() !!}
        </div>
    </div>
@endsection