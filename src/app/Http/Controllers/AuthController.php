<?php


namespace App\Http\Controllers;

use App\Http\Models\Auth\Check\AuthCheckViewModel;
use App\Lib\Auth\LoginService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use packages\UseCase\Auth\Login\AuthLoginInputData;
use packages\UseCase\Auth\Login\AuthLoginUseCaseInterface;

class AuthController extends BaseController
{
    public function login() {
        return view('auth.login');
    }

    public function submit(AuthLoginUseCaseInterface $interactor, Request $request, LoginService $loginService) {
        $id = $request->input('id');
        $pass = $request->input('pass');

        $inputData = new AuthLoginInputData($id, $pass);
        $outputData = $interactor->handle($inputData);

        if($outputData->result){
            $loginService->login($id, $outputData->userData);
            return redirect('auth/check');
        } else {
            return redirect('login');
        }
    }

    public function logout(LoginService $loginService) {
        $loginService->logout();
        return redirect('auth/check');
    }

    public function check(LoginService $loginService) {
        $viewModel = new AuthCheckViewModel($loginService->isLogin());
        return view('auth/check', compact('viewModel'));
    }
}
