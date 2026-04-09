<?php
$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT id, nombre, descripcion, genere FROM videojuegos");
$videojuegos = $resultado->fetch_all(MYSQLI_ASSOC);
include_once "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1>Catàleg de Videojocs</h1>
            </div>

            <div class="table-responsive card shadow-sm">
                <table class="table table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>Nom</th>
                            <th>Descripció</th>
                            <th>Gènere</th>
                            <th class="text-center">Accions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($videojuegos as $videojuego) { 
                            if ($videojuego["genere"]=="accio-aventura"){
                                $color="table-primary";
                            }else if ($videojuego["genere"]=="shooter"){
                                $color="table-danger";                
                            }else if ($videojuego["genere"]=="estrategia"){
                                $color="table-secondary";
                            }else if ($videojuego["genere"]=="simulacio"){
                                $color="table-success";
                            }else if ($videojuego["genere"]=="esports"){
                                $color="table-warning";        
                            }else if ($videojuego["genere"]=="plataformes"){
                                $color="table-info";
                            }else if ($videojuego["genere"]=="battleroyale"){
                                $color="table-light";
                            }else if ($videojuego["genere"]=="supervivencia"){
                                $color="table-dark";
                            }
                            ?>
                            <tr class= "<?php echo $color ?>">
                                <td><strong><?php echo $videojuego["nombre"] ?></strong></td>
                                <td><?php echo $videojuego["descripcion"] ?></td>
                                <td><?php echo $videojuego["genere"] ?></td>
                                <td class="text-center">
                                    <a href="editar.php?id=<?php echo $videojuego["id"] ?>" class="btn btn-sm btn-info">
                                        <i class="bi bi-pencil-square"></i> Editar
                                    </a>
                                    <a href="eliminar.php?id=<?php echo $videojuego["id"] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que quieres eliminarlo?')">
                                        <i class="bi bi-trash"></i> Esborrar
                                    </a>
                                </td>
                            </tr>
                        <?php 
                        include_once "footer.php";
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</body>
</html>