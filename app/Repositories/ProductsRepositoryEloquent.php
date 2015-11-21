<?php

namespace PizzariaWeb\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use PizzariaWeb\Repositories\ProductsRepository;
use PizzariaWeb\Models\Products;

/**
 * Class ProductsRepositoryEloquent
 * @package namespace PizzariaWeb\Repositories;
 */
class ProductsRepositoryEloquent extends BaseRepository implements ProductsRepository
{
    public function lists()
    {
        return $this->model->get(['id','name', 'price']);
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Products::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
