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
            'Locadora\Repositories\UserRepository',
            'Locadora\Repositories\UserRepositoryEloquent'
        );

        $this->app->bind(
            'Locadora\Repositories\VehicleRepository',
            'Locadora\Repositories\VehicleRepositoryEloquent'
        );

        $this->app->bind(
            'Locadora\Repositories\ImageRepository',
            'Locadora\Repositories\ImageRepositoryEloquent'
        );

    }
}
