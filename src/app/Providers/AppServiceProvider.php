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
//        $this->app->singleton(
//            \packages\Domain\Domain\User\IUserRepository::class,
//            \packages\InMemoryInfrastructure\User\InMemoryUserRepository::class
//        );

        $this->app->bind(
            \packages\UseCase\User\GetList\UserGetListUseCaseInterface::class,
            \packages\MockInteractor\User\MockUserGetInteractor::class
//            \packages\Domain\Application\User\UserGetListInteractor::class
        );

        $this->app->bind(
            \packages\UseCase\User\Create\UserCreateUseCaseInterface::class,
            \packages\MockInteractor\User\MockUserCreateInteractor::class
//            \packages\Domain\Application\User\UserCreateInteractor::class
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
