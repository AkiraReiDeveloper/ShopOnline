<?php

    include_once '../Login/admin/modelos/user_session.php';

    $userSession = new UserSession();
    $userSession->clouseSession();

    header("location: ../Login/index.php");

?>