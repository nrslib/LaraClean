<?php


namespace App\Http\Controllers;

use App\Http\Models\Account\Index\AccountIndexViewModel;
use Illuminate\Routing\Controller as BaseController;
use packages\UseCase\Account\GetInfo\AccountGetInfoInputData;
use packages\UseCase\Account\GetInfo\AccountGetInfoUseCaseInterface;

class AccountController extends BaseController
{
    public function index(AccountGetInfoUseCaseInterface $interactor) {
        $inputData = new AccountGetInfoInputData();
        $outputData = $interactor->handle($inputData);

        $viewModel = new AccountIndexViewModel($outputData->getInfo());

        return view('account/index', compact('viewModel'));
    }
}
