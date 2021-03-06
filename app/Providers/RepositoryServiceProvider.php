<?php

namespace Locadora\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
          'Locadora\Repositories\CategoryRepository',
          'Locadora\Repositories\CategoryRepositoryEloquent'
        );

        $this->app->bind(
            'Locadora\Repositories\ClientRepository',
            'Locadora\Repositories\ClientRepositoryEloquent'
        );

        $this->app->bind(
            'Locadora\Repositories\ImageRepository',
            'Locadora\Repositories\ImageRepositoryEloquent'
        );

        $this->app->bind(
            'Locadora\Repositories\PageRepository',
            'Locadora\Repositories\PageRepositoryEloquent'
        );

        $this->app->bind(
            'Locadora\Repositories\RentItemsRepository',
            'Locadora\Repositories\RentItemsRepositoryEloquent'
        );

        $this->app->bind(
            'Locadora\Repositories\RentRepository',
            'Locadora\Repositories\RentRepositoryEloquent'
        );

        $this->app->bind(
            'Locadora\Repositories\ReserveItemsRepository',
            'Locadora\Repositories\ReserveItemsRepositoryEloquent'
        );

        $this->app->bind(
            'Locadora\Repositories\ReserveRepository',
            'Locadora\Repositories\ReserveRepositoryEloquent'
        );
        $this->app->bind(
            'Locadora\Repositories\UserRepository',
            'Locadora\Repositories\UserRepositoryEloquent'
        );

        $this->app->bind(
            'Locadora\Repositories\VehicleRepository',
            'Locadora\Repositories\VehicleRepositoryEloquent'
        );




    }
}
