@extends('app')

@section('content')
    <div class="container">
        <h1>Usuários</h1>
        <hr>
        <a href="{{ route('admin.users.create') }}" class="btn btn-default">Novo Usuário</a>
        <br><br>
        <table class="table table-bordered table-responsive table-striped table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Grupo</th>
                <th style="width: 135px" class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td class="text-center">
                        <a href="{{route('admin.users.edit', ['id'=>$user->id])}}" class="btn btn-default btn-sm btn-warning">
                            Editar
                        </a>
                        <a href="{{route('admin.users.destroy', ['id'=>$user->id])}}" class="btn btn-default btn-sm btn-danger">
                            Excluir
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $users->render() !!}
    </div>
@endsection