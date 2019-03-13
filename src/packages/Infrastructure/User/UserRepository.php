<?php

namespace packages\Infrastructure\User;


use packages\Domain\Domain\User\User;
use packages\Domain\Domain\User\UserId;
use packages\Domain\Domain\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @param User $user
     * @return mixed
     */
    public function save(User $user)
    {
        // TODO: Implement save() method.
    }

    /**
     * @param UserId $id
     * @return User
     */
    public function find(UserId $id)
    {
        // TODO: Implement find() method.
    }

    /**
     * @param int $page
     * @param int $size
     * @return mixed
     */
    public function findByPage($page, $size)
    {
        // TODO: Implement findByPage() method.
    }
}
