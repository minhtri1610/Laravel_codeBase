<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Repositories\Contracts\RepositoryInterface;

use App\Models\Repositories\Contracts\UserServiceRepositoryInterface;
// add Interface

use App\Models\Repositories\Eloquent\Repository;


use App\Models\Repositories\Eloquent\UserServiceRepository;
// add Repository

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     *
     * @return array
     */
    private function repositories()
    {
        return [
            RepositoryInterface::class => Repository::class,

            UserServiceRepositoryInterface::class => UserServiceRepository::class,
            // add pair Interface Repository
        ];
    }

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
        foreach ($this->repositories() as $interface => $concrete) {
            $this->app->bind($interface, $concrete);
        }
    }
}
