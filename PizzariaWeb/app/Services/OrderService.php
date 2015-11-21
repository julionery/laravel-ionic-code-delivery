<?php
/**
 * Created by PhpStorm.
 * User: Júlio
 * Date: 15/11/2015
 * Time: 17:02
 */

namespace PizzariaWeb\Services;


use Illuminate\Support\Facades\DB;
use PizzariaWeb\Repositories\CupomRepository;
use PizzariaWeb\Repositories\OrderRepository;
use PizzariaWeb\Repositories\ProductsRepository;

class OrderService
{
    /**
     * @var OrderRepository
     */
    private $orderRepository;
    /**
     * @var CupomRepository
     */
    private $cupomRepository;
    /**
     * @var ProductsRepository
     */
    private $productsRepository;

    public function __construct(
        OrderRepository $orderRepository,
        CupomRepository $cupomRepository,
        ProductsRepository $productsRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->cupomRepository = $cupomRepository;
        $this->productsRepository = $productsRepository;
    }

    public function create (array $data)
    {
        \DB::beginTransaction();

        try{

            $data['status'] = 0;
            if(isset($data['cupom_code'])){
                $cupom = $this->cupomRepository->findByField('code', $data['cupom_code'])->first();
                $data['cupom_id'] = $cupom->id;
                $cupom->used = 1;
                $cupom->save();
                unset($data['cupom_code']);
            }

            $items = $data['items'];
            unset($data['items']);

            $order = $this->orderRepository->create($data);
            $total = 0;

            foreach($items as $item){
                $item['price'] = $this->productsRepository->find($item['products_id'])->price;
                $order->items()->create($item);
                $total += $item['price'] * $item['qtd'];
            }

            $order->total = $total;

            if(isset($cupom)){
                $order->total = $total - $cupom->value;
            }
            $order->save;
            \DB::commit();

        } catch(\Exception $e){
            \DB::rollback();
            throw $e;
        }
    }
}