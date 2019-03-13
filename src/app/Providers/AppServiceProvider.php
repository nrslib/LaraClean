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
            \packages\UseCase\User\GetList\IUserGetListUseCase::class,
            \packages\MockInteractor\User\MockUserGetInteractor::class
        );
        $this->app->bind(
            \packages\UseCase\User\Create\IUserCreateUseCase::class,
            \packages\MockInteractor\User\MockUserCreateInteractor::class
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
