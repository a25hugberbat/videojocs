<?php include_once "header.php"; ?>

<div class="row justify-content-center mt-5">
    <div class="col-md-8 text-center">
        <div class="p-5 mb-4 bg-light rounded-3 shadow-lg border-primary" style="border-top: 5px solid #0d6efd;">
            <div class="container-fluid py-5">
                <i class="bi bi-controller display-1 text-primary mb-4"></i>
                <h1 class="display-5 fw-bold text-dark">¡Benvingut a GameManager!</h1>
                <p class="col-md-12 fs-4 text-muted">
                    El teu sistema personal per a gestionar, organitzar i catalogar la teva col·lecció de videojocs de manera ràpida i senzilla.
                </p>
                <hr class="my-4">
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="listar.php" class="btn btn-primary btn-lg px-5 shadow">
                        <i class="bi bi-collection-play"></i> Veure Inventari
                    </a>
                    <a href="insertar.php" class="btn btn-outline-secondary btn-lg px-5">
                        <i class="bi bi-plus-circle"></i> Nou Joc
                    </a>
                </div>
            </div>
        </div>
        
        <div class="row mt-4 text-secondary">
            <div class="col-4">
                <i class="bi bi-database-check fs-2"></i>
                <p>Base de dades Segura</p>
            </div>
            <div class="col-4">
                <i class="bi bi-lightning-charge fs-2"></i>
                <p>Gestió Ràpida</p>
            </div>
            <div class="col-4">
                <i class="bi bi-shield-lock fs-2"></i>
                <p>Seguridad MySQLi</p>
            </div>
        </div>
    </div>
</div>

<?php include_once "footer.php"; ?>