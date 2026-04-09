<?php
include_once "header.php";
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
$sentencia = $mysqli->prepare("SELECT id, nombre, descripcion, genere FROM videojuegos WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$videojuego = $resultado->fetch_assoc();

if (!$videojuego) {
    exit("No hay resultados para ese ID");
}
?>
<div class="row">
    <div class="col-12">
        <h1>Actualizar videojoc</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $videojuego["id"] ?>">
            <div class="form-group">
                <label for="nombre">Nom</label>
                <input value="<?php echo $videojuego["nombre"] ?>" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="genere">Gènere</lable>
                <select id="genere" class="form-control" name="genere">
                    <option selected></option>
                    <option value="accio-aventura">Acció-Aventura</option>
                    <option value="shooter">Shooter</option>
                    <option value="estrategia">Estratègia</option>
                    <option value="simulacio">Simulació</option>
                    <option value="esports">Esports</option>
                    <option value="plataformes">Plataformes</option>
                    <option value="battleroyale">Battle Royale</option>
                    <option value="supervivencia">Supervivencia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripció</label>
                <textarea class="form-control" name="descripcion" id="descripcion" required><?php echo $videojuego["descripcion"] ?></textarea>
            </div>
            <div class="form-group">
                <br>
                <button class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "footer.php"; ?>