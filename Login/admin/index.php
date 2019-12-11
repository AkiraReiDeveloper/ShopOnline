<?php 

    include_once 'modelos/user_session.php';
    include_once 'modelos/usuarios.php';
    include_once 'modelos/mensajes.php';

    $usuario_session = new UserSession();
    $user = new usuarios();

    if(isset($_SESSION['user'])){
        $user->setUsuario($usuario_session->getCurrentUser());
        include_once 'index_.php';
    }elseif(isset($_POST['username']) && isset($_POST['contrasena'])){

        $userForm = $_POST['username'];
        $contraForm = $_POST['contrasena'];

        if($user->existeUsuario($userForm, $contraForm)){
            //mensaje("Usuario Valido");
            $username = $user->getUsuarioName();
            $userimg = $user->getUsuarioImagen();
            $usuario_session->setCurrentUser($username, $userimg);
            $user->setUsuario($userForm);
            include_once 'index_.php';
        }else{
            echo "<script>javascript:window.history.back();</script>";
            mensaje_danger("Usuario Invalido");
        }
    }else{
        echo "<script>javascript:window.history.back();</script>";
    }

?>