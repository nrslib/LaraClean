<?php

namespace packages\UseCase\User\GetList;


class UserGetListRequest
{
    /**
     * @var int
     */
    private $page;
    /**
     * @var int
     */
    private $size;

    /**
     * UserGetListRequest constructor.
     * @param int $page
     * @param int $size
     */
    public function __construct(int $page, int $size)
    {
        $this->page = $page;
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
}
