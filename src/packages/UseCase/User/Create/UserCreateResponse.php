<?php

namespace packages\UseCase\User\Create;


class UserCreateResponse
{
    public $createdUserId;

    /**
     * UserCreateResponse constructor.
     * @param string $createdUserId
     */
    public function __construct(string $createdUserId)
    {
        $this->createdUserId = $createdUserId;
    }
}
