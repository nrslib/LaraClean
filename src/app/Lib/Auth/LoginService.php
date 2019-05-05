<?php


namespace App\Lib\Auth;


class LoginService
{
    public function login($id, AppAccountInfo $userData){
        session()->invalidate();

        $accountInfo = new AppAccountInfo($id, $userData);

        session(['accountInfo' => $accountInfo]);
    }

    public function logout() {
        session()->invalidate();
    }

    public function isLogin() {
        return session()->has('accountInfo');
    }

    /**
     * @return AppAccountInfo
     */
    public function getCurrent() {
        $accountInfo = session('accountInfo');
        return $accountInfo;
    }
}
