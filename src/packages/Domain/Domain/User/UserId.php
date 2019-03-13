<?php

namespace packages\Domain\Domain\User;


class UserId
{
    private $value;

    /**
     * UserId constructor.
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
