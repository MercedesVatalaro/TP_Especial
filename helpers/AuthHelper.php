<?php

class AuthHelper
{

    function __construct()
    {
        session_start();

    }
    /**
     * Verifica que el user este logueado y si no lo está
     * lo redirige al login.
     */


    function checkloggedIn()
    {

       
        if (!isset($_SESSION['email'])) {

            header("Location: " . BASE_URL . "login");
            die();
        }
    }
    
    public function getUser(){
        return $_SESSION;
    }

}
