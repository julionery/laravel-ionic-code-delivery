<?php
/**
 * Created by PhpStorm.
 * User: Júlio
 * Date: 30/10/2015
 * Time: 01:10
 */

namespace PizzariaWeb\Http\Controllers;


use Illuminate\Http\Request;
use PizzariaWeb\Repositories\OrderRepository;
use PizzariaWeb\Repositories\UserRepository;

class OrdersController extends Controller
{
    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {
        $orders = $this->repository->paginate(10);
        return view('admin.orders.index', compact('orders'));
    }

    public function edit($id, UserRepository $userRepository)
    {
        $list_status = [0=>'Pendente', 1=>'A caminho', 2=>'Entregue', 3=>'Cancelado'];
        $order = $this->repository->find($id);
        $deliveryman = $userRepository->getDeliveryman();
        return view('admin.orders.edit', compact('order', 'list_status', 'deliveryman'));
    }

    public function update(Request $request, $id)
    {
        $all = $request->all();
        $this->repository->update($all, $id);
        return redirect()->route('admin.orders.index');
    }

}