<?php


namespace packages\Domain\Application\Account;


use packages\Domain\Context\UserContextInterface;
use packages\UseCase\Account\GetInfo\AccountGetInfoInputData;
use packages\UseCase\Account\GetInfo\AccountGetInfoOutputData;
use packages\UseCase\Account\GetInfo\AccountGetInfoUseCaseInterface;
use packages\UseCase\Auth\Login\AccountInfo;

class AccountGetInfoInteractorInterface implements AccountGetInfoUseCaseInterface
{
    /**
     * @var UserContextInterface
     */
    private $userContext;

    /**
     * AccountGetInfoInteractorInterface constructor.
     * @param UserContextInterface $userContext
     */
    public function __construct(UserContextInterface $userContext)
    {
        $this->userContext = $userContext;
    }

    /**
     * @param AccountGetInfoInputData $inputData
     * @return AccountGetInfoOutputData
     */
    function handle(AccountGetInfoInputData $inputData)
    {
        // TODO: Implement handle() method.
        $accountInfo = new AccountInfo($this->userContext->getId(), 'nrs');
        return new AccountGetInfoOutputData($accountInfo);
    }
}
