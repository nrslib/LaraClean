<?php
/**
 * Created by IntelliJ IDEA.
 * User: usr0102464
 * Date: 2019/03/13
 * Time: 11:25
 */

namespace packages\User\Commons;


class UserModel
{
    public $id;
    public $name;

    /**
     * UserModel constructor.
     * @param string $id
     * @param string $name
     */
    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }


}
