<?php

namespace packages\UseCase\User\Create;


class UserCreateRequest
{
    /**
     * @var string
     */
    private $name;

    /**
     * UserCreateRequest constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
