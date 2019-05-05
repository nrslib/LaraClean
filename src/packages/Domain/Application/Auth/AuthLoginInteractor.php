<?php


namespace packages\Domain\Application\Auth;


use packages\UseCase\Auth\Login\AuthLoginInputData;
use packages\UseCase\Auth\Login\AuthLoginOutputData;
use packages\UseCase\Auth\Login\AuthLoginUseCaseInterface;
use packages\UseCase\Auth\Login\AccountInfo;

class AuthLoginInteractor implements AuthLoginUseCaseInterface
{

    /**
     * @param AuthLoginInputData $inputData
     * @return AuthLoginOutputData
     */
    public function handle(AuthLoginInputData $inputData)
    {
        // TODO: Implement handle() method.
        return new AuthLoginOutputData(true, new AccountInfo($inputData->getId(), 'nrs'));
    }
}
