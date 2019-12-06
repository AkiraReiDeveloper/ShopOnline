<?php


  function mensaje($mensaje){

    echo"<div name = 'mensaje' id = 'mensaje' class = 'alert alert-success' role = 'alert'>
    ".$mensaje."
    <button type = 'button' class = 'close' data-dismiss = 'alert' aria-label = 'colse'>
    <spam aria-hidden = 'true'>&times;</spam>
    </button>
    </div>
    ";
  }

  function mensaje_warning($mensaje){

    echo"<div name = 'mensaje' id = 'mensaje' class = 'alert alert-warning' role = 'alert'>
    ".$mensaje."
    <button type = 'button' class = 'close' data-dismiss = 'alert' aria-label = 'colse'>
    <spam aria-hidden = 'true'>&times;</spam>
    </button>
    </div>
    ";
  }

  function mensaje_danger($mensaje){

    echo"<div name = 'mensaje' id = 'mensaje' class = 'alert alert-danger' role = 'alert'>
    ".$mensaje."
    <button type = 'button' class = 'close' data-dismiss = 'alert' aria-label = 'colse'>
    <spam aria-hidden = 'true'>&times;</spam>
    </button>
    </div>
    ";
  }
?>