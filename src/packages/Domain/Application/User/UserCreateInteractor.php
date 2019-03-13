<?php

namespace packages\Domain\Application\User;

use packages\Domain\Domain\User\IUserRepository;
use packages\Domain\Domain\User\User;
use packages\Domain\Domain\User\UserId;
use packages\UseCase\User\Create\IUserCreateUseCase;
use packages\UseCase\User\Create\UserCreateRequest;
use packages\UseCase\User\Create\UserCreateResponse;

class UserCreateInteractor implements IUserCreateUseCase
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
     * @param UserCreateRequest $request
     * @return UserCreateResponse
     */
    public function handle(UserCreateRequest $request)
    {
        $userId = new UserId(uniqid());
        $createdUser = new User($userId, 'test-user');
        $this->userRepository->save($createdUser);

        return new UserCreateResponse($userId->getValue());
    }
}
