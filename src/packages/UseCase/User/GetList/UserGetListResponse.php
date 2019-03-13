<?php

namespace packages\UseCase\User\GetList;


use packages\User\Commons\UserModel;

class UserGetListResponse
{
    public $users;

    /**
     * UserGetListResponse constructor.
     * @param UserModel[] $users
     */
    public function __construct(array $users)
    {
        $this->users = $users;
    }
}
