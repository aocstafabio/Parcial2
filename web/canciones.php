<?php
include_once("header.php");
include_once("nav.php");

if (!isset($_SESSION['auth']) || !$_SESSION['auth']) {
    header('location: /Parcial2/web/home.php');
}




/*/
session_start();
require __DIR__ . '/../php/controllers/admin/canciones/index.controller.php'; ?>

<div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php if (isset($_SESSION['alert']) && $_SESSION['alert']['message']): ?>
                    <div class="alert alert-<?php echo $_SESSION['alert']['type'] ?>">
                        <?php echo $_SESSION['alert']['message']; ?>
                    </div>
                <?php unset($_SESSION['alert']); ?>
                <?php endif; ?>

                <table class="table table-bordered striped">
                    <thead>
                        <tr>
                            <td>Título</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($canciones as $cancion): ?>
                            <tr>
                                <td><?php echo $cancion->nombre; ?></td>
                                <td>
                                    <a href="/web/edit.php?id=<?php echo $cancion->id; ?>" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                                    <a href="#" class="btn btn-danger"><span class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>/*/