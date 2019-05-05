<?php


namespace packages\MockInteractor\Auth;


use packages\UseCase\Auth\Login\AuthLoginInputData;
use packages\UseCase\Auth\Login\AuthLoginOutputData;
use packages\UseCase\Auth\Login\AuthLoginUseCaseInterface;
use packages\UseCase\Auth\Login\AuthLoginUserData;

class MockAuthLoginInteractor implements AuthLoginUseCaseInterface
{

    /**
     * @param AuthLoginInputData $request
     * @return AuthLoginOutputData
     */
    public function handle(AuthLoginInputData $request)
    {
        return new AuthLoginOutputData($request->getId(), new AuthLoginUserData('nrs'));
    }
}
