<?php

namespace sisFmw\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'sisFmw\Repositories\CategoryRepository',
            'sisFmw\Repositories\CategoryRepositoryEloquent'
        );

        $this->app->bind(
            'sisFmw\Repositories\ProductRepository',
            'sisFmw\Repositories\ProductRepositoryEloquent'
        );

        $this->app->bind(
            'sisFmw\Repositories\ClientRepository',
            'sisFmw\Repositories\ClientRepositoryEloquent'
        );

        $this->app->bind(
            'sisFmw\Repositories\UserRepository',
            'sisFmw\Repositories\UserRepositoryEloquent'
        );

        $this->app->bind(
            'sisFmw\Repositories\OrderRepository',
            'sisFmw\Repositories\OrderRepositoryEloquent'
        );
    }
}
