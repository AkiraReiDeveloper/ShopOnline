<?php
   /* require_once 'conexion.php';
    require_once 'Login/admin/modelos/mensajes.php';
    
    $valueToSearch = null;
    $search_result = null;
    if(isset($_POST['query'])){
        if(!empty($_POST['query'])){
            $valueToSearch = $_POST['query'];
            // search in all table columns
            // using concat mysql function
            

            $search_result = filterTable($query, $valueToSearch);
        }/*else {
            $query = "SELECT * FROM `productos`";
            //$search_result = filterTable($query, $valueToSearch);
        }
        
        if(!empty($search_result)){
            //header("Location:producto.php?id_producto={$search_result['id_productos']}");
        }else{
            mensaje("El producto ingresado no existe".$search_result['id_productos']);
        }
        unset($_POST['query']);
    }*/
     
    // function to connect and execute the query
    function filterTable($valueToSearch)
    {
        $query = "SELECT * FROM `productos` WHERE `nombre` LIKE '%".$valueToSearch."%' LIMIT 0, 5";
        $conexion = ConexionDB::conexion();
        $resultado = $conexion->prepare($query);
        $resultado->execute();
        $data = $resultado->fetchAll();
        //var_dump($data);
        if(!empty($data)){
            //if(strcasecmp($valueToSearch,$data['nombre']) == 0){
                return $data;
            //}
        }else{
            return $data;
        }
    }
    
    /*$query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
        $query = "%$query%";
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = htmlentities(addslashes($query));
        // makes sure nobody uses SQL injection

        //$query = urlencode($query);
        //$query = str_replace("+", "%2B",$query);
        //$query = urldecode($query);
        
         
        //$sql = "SELECT * FROM productos WHERE ('nombre_producto' LIKE '%".?."%') OR ('descripcion_corta' LIKE '%".?."%')";
        //$sql = "SELECT * FROM productos WHERE 'nombre_producto' LIKE :search OR 'descripcion_corta' LIKE :search";
        $sql = "select * from productos where 'nombre_producto' like '%?%'";
         
        $resultado=$conexion->prepare($sql);
        //$resultado->bindValue(':search', '%' . $query . '%', PDO::PARAM_STR);
        $resultado->bindValue(1,$query);
        if($resultado->execute()){
            $registro = $resultado->fetchAll();
            while($registro=$resultado->fetch()){
                echo "<p><h3>".$registro['nombre_producto']."</h3>".$registro['descripcion_corta']."</p>";
            }
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }*/
?>