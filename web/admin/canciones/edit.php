<?php
require_once("../../header.php");
require_once("../../nav.php");
require __DIR__ . '/../../../web/php/controllers/admin/canciones/edit.controller.php';

session_start();




/*/if (!isset($_SESSION['auth']) || !$_SESSION['auth']) {
    header('location: /Parcial2/web/home.php');
}/*/

/*/
session_start();
require __DIR__ . '/../php/controllers/admin/canciones/index.controller.php'; ?>
/*/
?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <form action="../../php/controllers/admin/canciones/update.controller.php" method="POST">
                <div class="form-group">
                    <label for="titulo">Nombre</label>
                    <input type="text" class="form-control" id="titulo" name="titulo"
                     value="<?php echo $cancion->nombre?>">
                </div>
                <div class="form-group">
                    <label for="artista">Artista</label>
                    <input type="text" class="form-control" id="artista" name="artista"
                    value="<?php echo $cancion->artista?>">
                </div>

                <input type="hidden" name="id" value="<?php echo $cancion->id ?>  " >

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>