<?php

namespace App\Http\Models\User\Index;

use App\Http\Models\User\Commons\UserViewModel;

class UserIndexViewModel
{
    public $users;

    /**
     * UserIndexViewModel constructor.
     * @param UserViewModel[] $users
     */
    public function __construct(array $users)
    {
        $this->users = $users;
    }
}
