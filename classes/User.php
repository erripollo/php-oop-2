<?php 

/**
 * User class
 * @author Enrico <email@email.com>
* @copyright 2021 Enrico
 */
class User
{
    protected $name;
    protected $lastname;
    protected $email;
    protected $username;
    protected $password;

    function __construct(string $name, string $lastname, string $email, string $username, string $password)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }

    public function insertCreditCard($creditCard)
    {
        return 'processed payment';
    }
}

?>