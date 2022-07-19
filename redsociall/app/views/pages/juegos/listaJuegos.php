<?php require_once RUTA_APP . '/views/components/header.php'; ?>
<?php require_once RUTA_APP . '/views/components/navbar.php'; 

?>

<div class="container">
    <div class="card mt-2">
        <div class="card-body">
            <h3 class="text-center text-muted">Juegos</h3>
            <hr>
            <div class="lista-de-usuarios-registrados">
            <?php foreach($data["juegos"] as $juegos): ?>
                <div class="elemento-usuario-registrado">
                    <img src="<?php echo RUTA_PROJECT . '/' . $juegos->fotoJuego ?>" alt="" class="image-big-user mr-2">
                    <a href="<?php echo RUTA_PROJECT ?>/juegos/juego/<?php echo $juegos->idJuego?>" ><h4 class="text-muted"><?php echo $juegos->Nombre ?></h4></a>
                    <h4 class="text-muted"><?php echo $juegos->creador ?></h4>
                    
                </div>
                <hr>
            <?php endforeach ?>
        </div>
        </div>
    </div>
</div>

<?php 

require_once RUTA_APP . '/views/components/footer.php';?>