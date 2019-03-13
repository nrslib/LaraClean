<?php

namespace packages\UseCase\User\GetList;

interface IUserGetListUseCase
{
    /**
     * @param UserGetListRequest $request
     * @return UserGetListResponse
     */
    public function handle(UserGetListRequest $request);
}
