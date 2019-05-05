<?php


namespace packages\UseCase\Auth\Login;


interface AuthLoginUseCaseInterface
{

    /**
     * @param AuthLoginInputData $request
     * @return AuthLoginOutputData
     */
    public function handle(AuthLoginInputData $request);
}
