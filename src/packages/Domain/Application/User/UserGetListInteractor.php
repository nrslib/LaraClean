<?php

namespace packages\Domain\Application\User;

use packages\Domain\Domain\User\IUserRepository;
use packages\UseCase\User\GetList\IUserGetListUseCase;
use packages\UseCase\User\GetList\UserGetListRequest;
use packages\UseCase\User\GetList\UserGetListResponse;
use packages\User\Commons\UserModel;

class UserGetListInteractor implements IUserGetListUseCase
{
    /**
     * @var IUserRepository
     */
    private $userRepository;

    /**
     * UserCreateInteractor constructor.
     * @param IUserRepository $userRepository
     */
    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param UserGetListRequest $request
     * @return UserGetListResponse
     */
    public function handle(UserGetListRequest $request)
    {
        $users = $this->userRepository->findByPage($request->getPage(), $request->getSize());

        $userModels = array_map(
            function ($x) {
                return new UserModel($x->id, $x->name);
            },
            $users
        );
        return new UserGetListResponse($userModels);
    }
}
