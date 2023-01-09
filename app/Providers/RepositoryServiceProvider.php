<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\{UserRepositoryInterface, VolunteerRepositoryInterface, 
                    ServiceRepositoryInterface, BeneficiaryRepositoryInterface, ProductRepositoryInteface, SupporterRepositoryInterface};
use App\Repositories\{UserRepository, VolunteerRepository, ServiceRepository, BeneficiaryRepository, ProductRepository, SupporterRepository};


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(VolunteerRepositoryInterface::class, VolunteerRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(BeneficiaryRepositoryInterface::class, BeneficiaryRepository::class);
        $this->app->bind(SupporterRepositoryInterface::class, SupporterRepository::class);
        $this->app->bind(ProductRepositoryInteface::class, ProductRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
