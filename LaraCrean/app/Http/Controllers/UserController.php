<?php
/**
 * Created by IntelliJ IDEA.
 * User: KAINU
 * Date: 2019/03/13
 * Time: 0:52
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use packages\UseCase\User\Create\IUserCreateUseCase;
use packages\UseCase\User\Create\UserCreateRequest;

class UserController extends BaseController
{
    public function create(IUserCreateUseCase $interactor){
        $request = new UserCreateRequest();
        $response = $interactor->handle($request);

        $user_id = $response->createdUserId;
        return view('user/create', compact('user_id'));
    }
}
