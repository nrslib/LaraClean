<?php

namespace App\Http\Controllers;

use App\Http\Models\User\Commons\UserViewModel;
use App\Http\Models\User\Index\UserIndexViewModel;
use Illuminate\Routing\Controller as BaseController;
use packages\UseCase\User\Create\IUserCreateUseCase;
use packages\UseCase\User\Create\UserCreateRequest;
use packages\UseCase\User\GetList\IUserGetListUseCase;
use packages\UseCase\User\GetList\UserGetListRequest;

class UserController extends BaseController
{
    public function index(IUserGetListUseCase $interactor)
    {
        $request = new UserGetListRequest(1, 10);
        $response = $interactor->handle($request); // Request なしで実行できるようにするのも有り

        $users = array_map(
            function ($x) {
                return new UserViewModel($x->id, $x->name);
            },
            $response->users
        );
        $viewModel = new UserIndexViewModel($users);

        return view('user/index', compact('viewModel'));
    }

    public function create(IUserCreateUseCase $interactor)
    {
        // TODO: get parameter from Request
        $request = new UserCreateRequest();
        $response = $interactor->handle($request);

        $user_id = $response->createdUserId;
        return view('user/create', compact('user_id'));
    }
}
