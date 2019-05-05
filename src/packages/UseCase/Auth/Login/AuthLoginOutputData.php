<?php


namespace packages\UseCase\Auth\Login;


class AuthLoginOutputData
{

    /**
     * @var boolean
     */
    private $result;

    /**
     * @var AccountInfo
     */
    private $userData;

    /**
     * AuthLoginResponse constructor.
     * @param bool $result
     * @param AccountInfo $userData
     */
    public function __construct($result, AccountInfo $userData)
    {
        $this->result = $result;
        $this->userData = $userData;
    }

    /**
     * @return bool
     */
    public function isSucceed(): bool
    {
        return $this->result;
    }

    /**
     * @return AccountInfo
     */
    public function getUserData(): AccountInfo
    {
        return $this->userData;
    }
}
