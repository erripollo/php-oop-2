<?php 

/**
 * User class
 */
class User
{
    protected $name;
    protected $lastname;
    protected $email;
    protected $username;
    protected $password;

    function __construct($name, $lastname, $email, $usrname, $password)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->usrname = $usrname;
        $this->password = $password;
    }
}

?>