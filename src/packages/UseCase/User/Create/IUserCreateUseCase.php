<?php

namespace packages\UseCase\User\Create;


interface IUserCreateUseCase
{
    /**
     * @param UserCreateRequest $request
     * @return UserCreateResponse
     */
    public function handle(UserCreateRequest $request);
}
