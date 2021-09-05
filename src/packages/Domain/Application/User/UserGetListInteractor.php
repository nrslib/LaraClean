<?php

namespace packages\Domain\Application\User;

use packages\Domain\Context\UserContextInterface;
use packages\Domain\Domain\User\UserRepositoryInterface;
use packages\UseCase\User\GetList\UserGetListUseCaseInterface;
use packages\UseCase\User\GetList\UserGetListRequest;
use packages\UseCase\User\GetList\UserGetListResponse;
use packages\User\Commons\UserModel;

class UserGetListInteractor implements UserGetListUseCaseInterface
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    /**
     * UserCreateInteractor constructor.
     * @param UserRepositoryInterface $userRepository
     * @param UserContextInterface $userContext
     */
    public function __construct(UserRepositoryInterface $userRepository, UserContextInterface $userContext)
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
