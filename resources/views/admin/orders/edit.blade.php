@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h2>Pedido #{{$order->id}} - R$ {{$order->total}}</h2>
                        <h3>Cliente: {{$order->client->user->name}} </h3>
                        <h4>Data: {{$order->created_at}}</h4>

                        <p>
                            <b>Entregar em:</b> <br>
                            {{$order->client->address}} - {{$order->client->city}} - {{$order->client->state}}
                            <br>
                        </p>
                        <div class="panel-body">
                            {!! Form::model($order, ['route'=>['admin.orders.update', $order->id]]) !!}

                            <div class="form-group">
                                {!! Form::submit('Salvar',['class'=>'btn btn-primary', 'style'=>'width: 100px']) !!}
                                <a href="javascript:history.back()" class="btn btn-primary" style="width: 100px">Voltar</a>
                            </div>

                            <div class="form-group">
                                {!! Form::label('Status', 'Status: ') !!}
                                {!! Form::select('status', $list_status, null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('Entregador', 'Entregador: ') !!}
                                {!! Form::select('user_deliveryman_id', $deliveryman, null, ['class'=>'form-control']) !!}
                            </div>

                            {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection