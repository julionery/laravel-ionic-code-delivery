@extends('app')

@section('content')
    <div class="container">
        <h1>Cupoms</h1>
        <hr>
        <a href="{{ route('admin.cupoms.create') }}" class="btn btn-default">Novo Cupom</a>
        <br><br>
        <table class="table table-bordered table-responsive table-striped table-hover">
            <thead>
            <tr>
                <th style="width: 60px">ID</th>
                <th>Código</th>
                <th>Valor</th>
                <th style="width: 135px" class="text-center">Ações</th>
            </tr>
            </thead>

            <tbody>
            @foreach($cupoms as $cupom)
                <tr>
                    <td>{{ $cupom->id }}</td>
                    <td>{{ $cupom->code }}</td>
                    <td>{{ $cupom->value }}</td>
                    <td>
                        <a href="{{route('admin.cupoms.edit', ['id'=>$cupom->id])}}" class="btn btn-default btn-sm btn-warning">
                            Editar
                        </a>
                        <a href="{{route('admin.cupoms.destroy', ['id'=>$cupom->id])}}" class="btn btn-default btn-sm btn-danger">
                            Excluir
                        </a>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <div align="left">
            {!! $cupoms->render() !!}
        </div>
    </div>
@endsection