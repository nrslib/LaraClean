<?php

namespace packages\Domain\Domain\User;


class User
{
    /**
     * @var UserId
     */
    private $id;
    /**
     * @var string
     */
    private $name;

    /**
     * User constructor.
     * @param UserId $id
     * @param string $name
     */
    public function __construct(UserId $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return UserId
     */
    public function getId(): UserId
    {
        return $this->id;
    }
}
