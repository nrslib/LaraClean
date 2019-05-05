<?php


namespace App\Lib\Context;


use App\Lib\Auth\LoginService;
use packages\Domain\Context\UserContextInterface;

class UserContext implements UserContextInterface
{
    /**
     * @var string
     */
    private $id;

    /**
     * UserContext constructor.
     * @param LoginService $loginService
     */
    public function __construct(LoginService $loginService)
    {
        if($loginService->isLogin()){
            $accountInfo = $loginService->getCurrent();
            $this->id = $accountInfo->getId();
        }
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
