<?php


namespace packages\UseCase\Account\GetInfo;


use packages\UseCase\Auth\Login\AccountInfo;

class AccountGetInfoOutputData
{
    /**
     * @var AccountInfo
     */
    private $info;

    /**
     * AccountGetInfoUseCase constructor.
     * @param AccountInfo $info
     */
    public function __construct(AccountInfo $info)
    {
        $this->info = $info;
    }

    /**
     * @return AccountInfo
     */
    public function getInfo(): AccountInfo
    {
        return $this->info;
    }
}
