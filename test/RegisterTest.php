<?php
use PHPUnit\Framework\TestCase;

final class RegisterTest extend TestCase
{
    private $funciones;

    public function emptyUsernameTest() : void
    {
        $this -> funciones = new functions();
        $this -> funciones -> set('', 'email', 'password', 'password');
        $this -> assertEquals(array_pop($this -> funciones -> get()), "Username is required");
    }

    public function emptyEmailTest() : void
    {

    }

    public function emptyPasswordTest() : void
    {

    }

    public function passwordNotMatchTest() : void
    {

    }

    public function correctRegistrationTest() : void 
    {

    }
}
?>