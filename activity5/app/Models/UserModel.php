<?php

/**
 * Model class containing data neccessary for users
 *
 */
namespace App\Models;
use JsonSerializable;

class UserModel implements JsonSerializable
{

    // variables
    private $username;
    private $password;

    // constructor
    function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    // getters and setters

    /**
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function jsonSerialize() {
        // return [
        //     'username' => $this->username,
        //     'password' => $this->password
        // ];
        return get_object_vars($this);
    }
}
