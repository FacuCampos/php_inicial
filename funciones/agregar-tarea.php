<?php
    $form_titulo = $_POST['titulo'];
    $form_descripcion = $_POST['descripcion'];
    $form_fecha = $_POST['fecha'];

    function agregar_tarea($titulo, $descripcion, $fecha){

        include ('conexion.php');

        $con = conectar_con_BD();
    
        mysqli_query($con, "INSERT INTO gestor_tareas VALUE(DEFAULT, '$titulo', '$descripcion','$fecha')");
    
        desconectar_BD($con);
    }

    agregar_tarea($form_titulo, $form_descripcion, $form_fecha);

    $host = $_SERVER['HTTP_HOST'];

    header("Location:  http://$host/nueva-tarea.php?ok");
?>