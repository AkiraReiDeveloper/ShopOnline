<?php 

    include_once 'modelos/user_session.php';
    include_once 'modelos/usuarios.php';
    include_once 'modelos/mensajes.php';

    $usuario_session = new UserSession();
    $user = new usuarios();

    if(isset($_SESSION['admin']) && isset($_SESSION['user'])){
        include_once "index_.php";
    }else{
        if(isset($_SESSION['user'])){
            $user->setUsuario($usuario_session->getCurrentUser());
            header('Location: ../../index.php');
        }elseif(isset($_POST['username']) && isset($_POST['contrasena'])){

            $userForm = $_POST['username'];
            $contraForm = $_POST['contrasena'];
    
            if($user->existeUsuario($userForm, $contraForm)){
                //mensaje("Usuario Valido");
                $username = $user->getUsuarioName();
                $userimg = $user->getUsuarioImagen();
                $usertipe = $user->getUsuarioTipo();
                $usuario_session->setCurrentUser($username, $userimg, $usertipe);
                $user->setUsuario($userForm);
                header('Location: ../../index.php');
            }else{
                header('Location: ../index.php?novalido');
                
            }
        }else{
            header('Location: ../index.php');
        }
    }

?>