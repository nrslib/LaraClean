<?php


namespace packages\UseCase\Auth\Login;


class AuthLoginOutputData
{

    /**
     * @var boolean
     */
    public $result;

    /**
     * @var AuthLoginUserData
     */
    public $userData;

    /**
     * AuthLoginResponse constructor.
     * @param bool $result
     * @param AuthLoginUserData $userData
     */
    public function __construct($result, AuthLoginUserData $userData)
    {
        $this->result = $result;
        $this->userData = $userData;
    }
}
