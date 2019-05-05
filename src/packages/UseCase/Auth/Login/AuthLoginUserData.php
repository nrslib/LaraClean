<?php


namespace packages\UseCase\Auth\Login;


class AuthLoginUserData
{
    /**
     * @var string
     */
    private $name;

    /**
     * AuthLoginUserData constructor.
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
