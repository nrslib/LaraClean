<?php


namespace App\Lib\Auth;


use packages\UseCase\Auth\Login\AuthLoginUserData;

class LoginService
{
    public function login(string $id, AuthLoginUserData $userData){
        session()->invalidate();

        $accountInfo = new AccountInfo($id, $userData);

        session(['accountInfo' => $accountInfo]);
    }

    public function logout() {
        session()->invalidate();
    }

    public function isLogin() {
        return session()->exists('accountInfo');
    }
}
