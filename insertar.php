<?php include_once "header.php"; ?>
<div class="row">
    <div class="col-12">
        <h1>Registrar videojoc</h1>
        <form action="registrar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nom</label>
                <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="genere">Gènere</lable>
                <select id="genere" class="form-select" name="genere">
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
                <textarea placeholder="Descripción" class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
            </div>
            <br>
            <div class="form-group"><button class="btn btn-primary">Guardar</button></div>
        </form>
    </div>
</div>
<?php include_once "footer.php"; ?>