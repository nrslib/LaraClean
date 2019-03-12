<?php
/**
 * Created by IntelliJ IDEA.
 * User: KAINU
 * Date: 2019/03/13
 * Time: 0:23
 */

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
