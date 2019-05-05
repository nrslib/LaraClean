<?php


namespace App\Http\Models\Account\Index;


use packages\UseCase\Auth\Login\AccountInfo;

class AccountIndexViewModel
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $name;

    /**
     * AccountIndexViewModel constructor.
     * @param $accountInfo AccountInfo
     */
    public function __construct(AccountInfo $accountInfo)
    {
        $this->id = $accountInfo->getId();
        $this->name = $accountInfo->getName();
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


}
