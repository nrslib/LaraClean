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
        // Mock で実行したい場合はコメントアウト
        $this->registerForInMemory();

        // Mock で実行したい場合はコメント外す
//        $this->registerForMock();
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

    private function registerForInMemory(){
        $this->app->singleton(
            \packages\Domain\Domain\User\UserRepositoryInterface::class,
            \packages\InMemoryInfrastructure\User\InMemoryUserRepository::class
        );

        $this->app->bind(
            \packages\UseCase\Auth\Login\AuthLoginUseCaseInterface::class,
            \packages\Domain\Application\Auth\AuthLoginInteractor::class
        );

        $this->app->bind(
            \packages\UseCase\User\GetList\UserGetListUseCaseInterface::class,
            \packages\Domain\Application\User\UserGetListInteractor::class
        );

        $this->app->bind(
            \packages\UseCase\User\Create\UserCreateUseCaseInterface::class,
            \packages\Domain\Application\User\UserCreateInteractor::class
        );
    }

    private function registerForMock(){
        $this->app->bind(
            \packages\UseCase\Auth\Login\AuthLoginUseCaseInterface::class,
            \packages\MockInteractor\Auth\MockAuthLoginInteractor::class
        );

        $this->app->bind(
            \packages\UseCase\User\GetList\UserGetListUseCaseInterface::class,
            \packages\MockInteractor\User\MockUserGetInteractor::class
        );

        $this->app->bind(
            \packages\UseCase\User\Create\UserCreateUseCaseInterface::class,
            \packages\MockInteractor\User\MockUserCreateInteractor::class
        );
    }
}
