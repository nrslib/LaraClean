<?php

namespace packages\User\Commons;


class UserModel
{
    public $id;
    public $name;

    /**
     * UserModel constructor.
     * @param string $id
     * @param string $name
     */
    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }


}
