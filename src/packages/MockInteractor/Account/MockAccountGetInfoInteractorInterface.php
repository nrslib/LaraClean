<?php


namespace packages\MockInteractor\Account;

use packages\UseCase\Account\GetInfo\AccountGetInfoInputData;
use packages\UseCase\Account\GetInfo\AccountGetInfoOutputData;
use packages\UseCase\Account\GetInfo\AccountGetInfoUseCaseInterface;
use packages\UseCase\Auth\Login\AccountInfo;

class MockAccountGetInfoInteractorInterface implements AccountGetInfoUseCaseInterface
{
    /**
     * @param AccountGetInfoInputData $inputData
     * @return AccountGetInfoOutputData
     */
    function handle(AccountGetInfoInputData $inputData)
    {
        $accountInfo = new AccountInfo('test-user-id', 'nrs');
        return new AccountGetInfoOutputData($accountInfo);
    }
}
