<?php

    $vars = array_keys(get_defined_vars());
    foreach($vars as $var){

        unset(${"$var"});
    }

?>