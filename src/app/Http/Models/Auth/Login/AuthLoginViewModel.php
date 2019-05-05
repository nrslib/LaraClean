<?php


namespace App\Http\Models\Auth\Login;


class AuthLoginViewModel
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
     * AuthLoginViewModel constructor.
     * @param string $id
     * @param string $pass
     */
    public function __construct(string $id, string $pass)
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
