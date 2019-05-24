<!DOCTYPE html>
<html lang="es">

<?php include_once('includes/layouts/header.php'); ?>

<body>
    <div class="container d-flex justify-content-center">
        <?php if (!isset($_COOKIE['idUsuario'])) { ?>
            <div class="col-md-4 formulario">
                <?php include('includes/layouts/formulario-login.php'); ?>
            </div>
        <?php } else { ?>
            <div class="mensaje text-center alert alert-success">
                <p>Logueado <a href="includes/modelos/modelo-usuario.php?accion=logout">Cerrar Session</a>
            </div>
        <?php  } ?>
        <?php include_once('includes/layouts/footer.php'); ?>
    </div>
</body>

</html>