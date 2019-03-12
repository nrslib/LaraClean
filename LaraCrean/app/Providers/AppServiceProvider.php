<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \packages\UseCase\User\Create\IUserCreateUseCase::class,
            \packages\MockInteractor\User\MockUserCreateInteractor::class
        );
//        $this->app->bind(
//            'App\package\UseCase\User\Create\IUserCreateUseCase',
//            'App\package\MockInteractor\MockUserCreateInteractor'
//        );
        $this->app->bind(
            \App\Repositories\Calculation\CalculationRepositoryInterface::class,
            \App\Repositories\Calculation\CalculationRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
