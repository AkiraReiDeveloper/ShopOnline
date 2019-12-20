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
                $userid = $user->getUsuarioId();
                $username = $user->getUsuarioName();
                $userimg = $user->getUsuarioImagen();
                $usertipe = $user->getUsuarioTipo();
                $usuario_session->setCurrentUser($userid, $username, $userimg, $usertipe);
                $user->setUsuario($userForm);
                header('Location: ../../index.php');
            }else{
                header('Location: ../index.php?novalido');  
            }
        }else{
            if(isset($_POST["RememberPass"])){
                if(isset($_POST['username'])){
                    if($user->validarCorreo($_POST['username'])){
                        $token = $user->generarToken($_POST['username']);
                        header("Location: ../../includes/pop.php?RememberPass&username=".$_POST["username"]."&token=".$token);
                    }else{
                        header("Location: ../index.php?remember&error");
                    }
                }   
            }else{
                if(isset($_POST["recuperar"])){
                    if($_POST["contrasena"]==$_POST["contrasena2"]){
                        if($user->validarToken($_POST["token"])){
                            if($user->actualizarContrasena($_POST["contrasena"], $_POST["token"])){
                                header('Location: ../index.php?exito');
                            }else{
                                header('Location: ../index.php?return&fail');
                            }
                        }else{
                            header('Location: ../index.php?return&notoken');
                        }
                    }else{
                        header("Location: ../index.php?return&token=".$_POST["token"]."&nocontra");
                    }
                }else{
                    header('Location: ../index.php');
                }
            }
            
        }
    }
    

?>