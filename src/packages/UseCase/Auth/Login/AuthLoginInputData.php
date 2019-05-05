<?php


namespace packages\UseCase\Auth\Login;


class AuthLoginInputData
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $pass;

    /**
     * AuthLoginInputData constructor.
     * @param string $id
     * @param string $pass
     */
    public function __construct($id, $pass)
    {
        $this->id = $id;
        $this->pass = $pass;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPass(): string
    {
        return $this->pass;
    }
}
