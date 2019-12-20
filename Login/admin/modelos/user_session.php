<?php

class UserSession{

    public function __construct()
    {
        session_start();
    }

    public function setCurrentUser($iduser, $user, $img, $tipe){

        $_SESSION['id_user'] = $iduser;
        $_SESSION['user'] = $user;
        $_SESSION['img'] = $img;
        if($tipe==1){
            $_SESSION['admin'] = $tipe;
        }
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