<?php


namespace packages\UseCase\Account\GetInfo;



interface AccountGetInfoUseCaseInterface
{
    /**
     * @param AccountGetInfoInputData $inputData
     * @return AccountGetInfoOutputData
     */
    function handle(AccountGetInfoInputData $inputData);
}
