<?php

namespace App\Http\Models\Auth\Check;

class AuthCheckViewModel {
    /**
     * @var boolean
     */
    private $isLogin;

    /**
     * AuthCheckViewModel constructor.
     * @param bool $isLogin
     */
    public function __construct($isLogin)
    {
        $this->isLogin = $isLogin;
    }

    /**
     * @return bool
     */
    public function isLogin(): bool
    {
        return $this->isLogin;
    }
}
