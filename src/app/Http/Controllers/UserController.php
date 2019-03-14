<?php

namespace App\Http\Controllers;

use App\Http\Models\User\Commons\UserViewModel;
use App\Http\Models\User\Create\UserCreateViewModel;
use App\Http\Models\User\Index\UserIndexViewModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use packages\UseCase\User\Create\UserCreateUseCaseInterface;
use packages\UseCase\User\Create\UserCreateRequest;
use packages\UseCase\User\GetList\UserGetListUseCaseInterface;
use packages\UseCase\User\GetList\UserGetListRequest;

class UserController extends BaseController
{
    public function index(UserGetListUseCaseInterface $interactor)
    {
        $request = new UserGetListRequest(1, 10);
        $response = $interactor->handle($request);

        $users = array_map(
            function ($x) {
                return new UserViewModel($x->id, $x->name);
            },
            $response->users
        );
        $viewModel = new UserIndexViewModel($users);

        return view('user/index', compact('viewModel'));
    }

    public function create(UserCreateUseCaseInterface $interactor, Request $request)
    {
        $name = $request->input('name');
        $request = new UserCreateRequest($name);
        $response = $interactor->handle($request);

        $viewModel = new UserCreateViewModel($response->getCreatedUserId(), $name);
        return view('user/create', compact('viewModel'));
    }
}
