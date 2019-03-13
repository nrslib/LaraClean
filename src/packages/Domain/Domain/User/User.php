<?php
/**
 * Created by IntelliJ IDEA.
 * User: KAINU
 * Date: 2019/03/13
 * Time: 0:26
 */

namespace Domain\Domain\User;


class User
{
    public $id;

    /**
     * User constructor.
     * @param $id UserId
     */
    public function __construct($id)
    {
        $this->id = $id;
    }
}
