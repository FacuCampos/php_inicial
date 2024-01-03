<div class="form-contenedor" >
    <form action="funciones/agregar-tarea.php" method="post">
        <label for="titulo" class="form-label">Título:</label>
        <input type="text" name="titulo" class="form-campo" required>

        <label for="descripcion" class="form-label">Descripción:</label>
        <textarea cols="30" rows="5" name="descripcion" class="form-campo"></textarea>

        <label for="fecha" class="form-label">Fecha límite:</label>
        <input type="date" name="fecha" class="form-campo">

        <input class="btn-agregar-tarea" type="submit" value="Agregar tarea">
    </form>

    <?php 
        if (isset($_GET['ok'])){
            echo "<h3>Se ha guardado la tarea exitosamente</h3>";
        }
    ?>
</div>