<?php
/**
 * Created by IntelliJ IDEA.
 * User: KAINU
 * Date: 2019/03/13
 * Time: 0:26
 */

namespace Domain\Domain\User;


interface IUserRepository
{
    /**
     * @param User $user
     * @return mixed
     */
    public function save(User $user);

    /**
     * @param UserId $id
     * @return User
     */
    public function find(UserId $id);
}
