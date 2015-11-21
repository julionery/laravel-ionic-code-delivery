@extends('app')

@section('content')
    <div class="container">
        <h1>Pedidos</h1>
        <hr>
        <br><br>
        <table class="table table-bordered table-responsive table-striped table-hover">
            <thead>
            <tr>
                <th style="width: 60px">ID</th>
                <th>Total</th>
                <th>Data</th>
                <th>Itens</th>
                <th>Entregador</th>
                <th>Status</th>
                <th style="width: 135px" class="text-center">Ações</th>
            </tr>
            </thead>

            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td># {{$order-> id}}</td>
                    <td>R$ {{$order-> total}}</td>
                    <td>{{$order-> created_at}}</td>
                    <td>
                        <ul>
                            @foreach($order->items as $item )
                            <li>{{$item->products->name}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>@if($order->deliveryman)
                            {{$order->deliveryman->name}}
                        @else
                            --
                        @endif

                    </td>
                    <td>
                        @if($order->status==0)Pendente
                            @endif
                        @if($order->status==1)A caminho
                            @endif
                        @if($order->status==2)Entregue
                            @endif
                        @if($order->status==3)Cancelado
                            @endif
                    </td>
                    <td align="center">
                        <a href="{{route('admin.orders.edit', ['id'=>$order->id])}}" class="btn btn-default btn-sm btn-warning">
                            Editar
                        </a>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <div align="left">
            {!! $orders->render() !!}
        </div>
    </div>
@endsection