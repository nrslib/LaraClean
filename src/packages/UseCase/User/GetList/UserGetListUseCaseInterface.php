<?php

namespace packages\UseCase\User\GetList;

interface UserGetListUseCaseInterface
{
    /**
     * @param UserGetListRequest $request
     * @return UserGetListResponse
     */
    public function handle(UserGetListRequest $request);
}
