<?php

class UserSession{

    public function __construct()
    {
        session_start();
    }

    public function setCurrentUser($user, $img){

        $_SESSION['user'] = $user;
        $_SESSION['img'] = $img;
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }
    public function getCurrentImage(){
        return $_SESSION['img'];
    }

    public function clouseSession(){
        session_unset();
        session_destroy();
    }
}

?>