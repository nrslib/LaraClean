<?php

namespace packages\UseCase\User\Create;


interface UserCreateUseCaseInterface
{
    /**
     * @param UserCreateRequest $request
     * @return UserCreateResponse
     */
    public function handle(UserCreateRequest $request);
}
