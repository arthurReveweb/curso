<?php

namespace LaravelProject\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelProjectRepositoryProvider extends ServiceProvider
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
            \LaravelProject\Repositories\ClientRepository::class,
            \LaravelProject\Repositories\ClientRepositoryEloquent::class
            );

        $this->app->bind(
            \LaravelProject\Repositories\ProjectRepository::class,
            \LaravelProject\Repositories\ProjectRepositoryEloquent::class
        );

        $this->app->bind(
            \LaravelProject\Repositories\ProjectNoteRepository::class,
            \LaravelProject\Repositories\ProjectNoteRepositoryEloquent::class
        );
    }
}
