<?php

namespace packages\MockInteractor\User;


use packages\UseCase\User\GetList\IUserGetListUseCase;
use packages\UseCase\User\GetList\UserGetListRequest;
use packages\UseCase\User\GetList\UserGetListResponse;
use packages\User\Commons\UserModel;

class MockUserGetInteractor implements IUserGetListUseCase
{

    /**
     * @param UserGetListRequest $request
     * @return UserGetListResponse
     */
    public function handle(UserGetListRequest $request)
    {
        $users = [
            new UserModel('1', 'test-user-1'),
            new UserModel('2', 'test-user-2')
        ];
        return new UserGetListResponse($users);
    }
}
