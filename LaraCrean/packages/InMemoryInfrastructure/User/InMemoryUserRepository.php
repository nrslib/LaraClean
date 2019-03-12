<?php

namespace packages\InMemoryInfrastructure\User;

use Domain\Domain\User\IUserRepository;
use Domain\Domain\User\User;
use Domain\Domain\User\UserId;

class InMemoryUserRepository implements IUserRepository
{
    private $db = [];

    /**
     * @param User $user
     * @return mixed
     */
    public function save(User $user)
    {
        $this->db[$user->id->value] = $user;
    }

    /**
     * @param UserId $id
     * @return User
     */
    public function find(UserId $id)
    {
        $found = $this->db[$id->value];
        return $this->clone($found);
    }

    /**
     * @param User $user
     * @return User
     */
    private function clone(User $user){
        $cloned = new User($user->id);
        return $cloned;
    }
}
