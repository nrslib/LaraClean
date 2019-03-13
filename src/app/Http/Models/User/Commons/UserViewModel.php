<?php

namespace App\Http\Models\User\Commons;


class UserViewModel
{
    public $id;
    public $name;

    /**
     * UserViewModel constructor.
     * @param string $id
     * @param string $name
     */
    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}
