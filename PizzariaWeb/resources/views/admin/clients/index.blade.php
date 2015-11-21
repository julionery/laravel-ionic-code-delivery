@extends('app')

@section('content')
    <div class="container">
        <h1>Clientes</h1>
        <hr>
        <a href="{{ route('admin.clients.create') }}" class="btn btn-default">Novo Cliente</a>
        <br><br>
        <table class="table table-bordered table-responsive table-striped table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>CEP</th>
                <th style="width: 135px" class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->user->name }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->city }}</td>
                    <td>{{ $client->state }}</td>
                    <td>{{ $client->zipcode }}</td>
                    <td class="text-center">
                        <a href="{{route('admin.clients.edit', ['id'=>$client->id])}}" class="btn btn-default btn-sm btn-warning">
                            Editar
                        </a>
                        <a href="{{route('admin.clients.destroy', ['id'=>$client->id])}}" class="btn btn-default btn-sm btn-danger">
                            Excluir
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $clients->render() !!}
    </div>
@endsection