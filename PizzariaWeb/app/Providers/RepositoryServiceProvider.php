<?php

namespace PizzariaWeb\Providers;

use Illuminate\Support\ServiceProvider;
use PizzariaWeb\Models\Category;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'PizzariaWeb\Repositories\CategoryRepository',
            'PizzariaWeb\Repositories\CategoryRepositoryEloquent'
        );

        $this->app->bind(
            'PizzariaWeb\Repositories\ClientRepository',
            'PizzariaWeb\Repositories\ClientRepositoryEloquent'
        );

        $this->app->bind(
            'PizzariaWeb\Repositories\OrderRepository',
            'PizzariaWeb\Repositories\OrderRepositoryEloquent'
        );

        $this->app->bind(
            'PizzariaWeb\Repositories\OrderItemRepository',
            'PizzariaWeb\Repositories\OrderItemRepositoryEloquent'
        );

        $this->app->bind(
            'PizzariaWeb\Repositories\ProductsRepository',
            'PizzariaWeb\Repositories\ProductsRepositoryEloquent'
        );

        $this->app->bind(
            'PizzariaWeb\Repositories\UserRepository',
            'PizzariaWeb\Repositories\UserRepositoryEloquent'
        );

        $this->app->bind(
            'PizzariaWeb\Repositories\CupomRepository',
            'PizzariaWeb\Repositories\CupomRepositoryEloquent'
        );

    }
}
