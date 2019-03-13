<?php

namespace Domain\Domain\User;


class User
{
    public $id;

    /**
     * User constructor.
     * @param $id UserId
     */
    public function __construct($id)
    {
        $this->id = $id;
    }
}
