<?php


namespace packages\Domain\Application\Auth;


use packages\UseCase\Auth\Login\AuthLoginInputData;
use packages\UseCase\Auth\Login\AuthLoginOutputData;
use packages\UseCase\Auth\Login\AuthLoginUseCaseInterface;

class AuthLoginInteractor implements AuthLoginUseCaseInterface
{

    /**
     * @param AuthLoginInputData $request
     * @return AuthLoginOutputData
     */
    public function handle(AuthLoginInputData $request)
    {
        // TODO: Implement handle() method.
        throw new \Exception();
    }
}
