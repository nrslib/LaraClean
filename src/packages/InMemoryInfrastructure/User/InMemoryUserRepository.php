<?php

namespace packages\InMemoryInfrastructure\User;

use packages\Domain\Domain\User\UserRepositoryInterface;
use packages\Domain\Domain\User\User;
use packages\Domain\Domain\User\UserId;

class InMemoryUserRepository implements UserRepositoryInterface
{
    private $db = [];

    /**
     * @param User $user
     * @return mixed
     */
    public function save(User $user)
    {
        $this->db[$user->getId()->getValue()] = $user;
        var_dump($this->db);
    }

    /**
     * @param UserId $id
     * @return User
     */
    public function find(UserId $id)
    {
        $found = $this->db[$id->getValue()];
        return $this->clone($found);
    }

    /**
     * @param User $user
     * @return User
     */
    private function clone(User $user){
        $cloned = new User($user->getId(), $user->getName());
        return $cloned;
    }

    /**
     * @param int $page
     * @param int $size
     * @return User[]
     */
    public function findByPage($page, $size)
    {
        $start = ($page - 1) * $size;
        return array_slice($this->db, $start, $size);
    }
}
