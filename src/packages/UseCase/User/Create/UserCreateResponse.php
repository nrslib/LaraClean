<?php

namespace packages\UseCase\User\Create;


class UserCreateResponse
{
    /**
     * @var string
     */
    private $createdUserId;

    /**
     * UserCreateResponse constructor.
     * @param string $createdUserId
     */
    public function __construct(string $createdUserId)
    {
        $this->createdUserId = $createdUserId;
    }

    /**
     * @return string
     */
    public function getCreatedUserId(): string
    {
        return $this->createdUserId;
    }
}
