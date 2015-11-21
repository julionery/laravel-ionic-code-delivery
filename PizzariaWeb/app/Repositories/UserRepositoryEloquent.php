<?php

namespace PizzariaWeb\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use PizzariaWeb\Repositories\UserRepository;
use PizzariaWeb\Models\User;

/**
 * Class UserRepositoryEloquent
 * @package namespace PizzariaWeb\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    public function lists()
    {
        return $this->model->lists('name', 'id');
    }
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    public function getDeliveryman()
    {
        return $this->model->where(['role'=>'deliveryman'])->lists('name', 'id');
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
