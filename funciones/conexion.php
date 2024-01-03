<?php 
    function conectar_con_BD(){
        $conexion = mysqli_connect('localhost', 'id21742936_facucampos', 'admin-PHP-2024', 'id21742936_entrega_final_php') or exit("No se pudo conectar a la base de datos");

        return $conexion;
    }

    function desconectar_BD($conexion){
        mysqli_close($conexion);
    }
?>