@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Produtos  <small>editando produto: {{$products->name}}</small></h1><hr>

                        @include('errors._check')
                        <div class="panel-body">
                            {!! Form::model($products, ['route'=>['admin.products.update', $products->id]]) !!}

                            @include('admin.products._form')
                            <div class="form-group">
                                {!! Form::submit('Salvar',['class'=>'btn btn-primary', 'style'=>'width: 100px']) !!}
                                <a href="javascript:history.back()" class="btn btn-primary" style="width: 100px">Voltar</a>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection