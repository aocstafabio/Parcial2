<?php
require_once("../../header.php");
require_once("../../nav.php");
//require __DIR__ . '/../../../web/php/controllers/admin/canciones/subir.controller.php';
session_start();

?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <form action="../../php/controllers/admin/canciones/up.controller.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titulo">Nombre</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="">
                </div>
                <div class="form-group">
                    <label for="artista">Artista</label>
                    <input type="text" class="form-control" id="artista" name="artista" value="">
                </div>
               <!-- <input type="hidden" name="id" value="<?php //echo $cancion->id ?>">-->
          <label for="titulo">Genero: </label><br>
                <input type="radio" id="genero1" name="rock" value=""> Rock <br>
                <input type="radio" id="genero2" name="pop" value=""> Pop <br>
                <input type="radio" id="genero3" name="cumbia" value=""> Cumbia<br>
                <input type="radio" id="genero4" name="rap" value=""> Rap<br><br>
                <input type="hidden" name="id" value="">
                <div class="form-group">
          <input type="file" id="banner" name="banner" value=""><br><br>
                    <button type="submit" class="btn btn-primary">Subir</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php


?>
        