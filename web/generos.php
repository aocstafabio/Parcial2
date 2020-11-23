<?php
require __DIR__ . "/index.php";
require 'php/generos/index.php';?>
<br><br>

    <div class="container">
        <div class="row">
            <?php foreach($generos as $genero): ?>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="home.php?genero_id=<?php echo $genero->id ?>"><?php echo $genero->nombre ?></a>
                                </h5>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>