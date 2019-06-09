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
        $this -> funciones = new functions();
        $this -> funciones -> set('user', '', 'password', 'password');
        $this -> assertEquals(array_pop($this -> funciones -> get()), "Email is required");
    }

    public function emptyPasswordTest() : void
    {
        $this -> funciones = new functions();
        $this -> funciones -> set('user', 'email', '', 'password');
        $this -> assertEquals(array_pop($this -> funciones -> get()), "Password is required");
    }

    public function passwordNotMatchTest() : void
    {
        $this -> funciones = new functions();
        $this -> funciones -> set('user', 'email', 'password', 'password2');
        $this -> assertEquals(array_pop($this -> funciones -> get()), "The two passwords do not match");
    }

    public function correctRegistrationTest() : void 
    {
        $this -> funciones = new functions();
        $this -> funciones -> set('user', 'email', 'password', 'password');
        $this -> assertTrue(empty($this -> funciones -> get()));
    }
}
?>