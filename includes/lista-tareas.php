<?php
    include "funciones/conexion.php";

    $con = conectar_con_BD();

    $tabla = "SELECT * FROM gestor_tareas";
    $resp = $con->query($tabla);
    
    desconectar_BD($con);
?>

<section class="list-tareas-section <?php if ($resp->num_rows > 0){echo 'grilla';};?>">
    <?php
        if ($resp->num_rows > 0){
            while ($fila = $resp->fetch_assoc()){
                echo "
                    <div class='tarjeta'>
                        <h3>$fila[titulo]</h3>
                        <p class='tarjeta-descripcion'>$fila[descripcion]</p>
                        <p class='tarjeta-fecha'><strong>Fecha limite: </strong>$fila[fecha]</p>
                    </div>
                ";
            };
        } else {
            echo "<h2>No hay tareas</h2>";
        }
    ?>
</section>