<?php

include_once RUTA_APP . '/views/components/header.php';

include_once RUTA_APP . '/views/components/navbar.php';

?>
<style>
* {
    box-sizing: border-box;
}
:root {
    --var-bg-color: rgb(0, 0, 0);
}

.profile-card {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 1px solid black;
    background-color: #fff;
    border-radius: 10px;
}

.profile-card__background {
    width: 100%;
    height: 120px;
    background-color: var(--var-bg-color);
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.profile-card__imagen-center {
    display: flex;
    justify-content: center;
}

.profile-card__imagen {
    width: 100px;
    height: 100px;
    position: absolute;
    border-radius: 50%;
    top: 65px;
}

.profile-card__separation {
    width: 100%;
    height: 30px;
}

.profile-card__name {
    margin-top: 50px;
    font-weight: bold;
    font-size: 20px;
    color: var(--var-bg-color);
    text-align: center;
}

.profile-cards__stadistics {
    width: 100%;
    display: flex;
    justify-content: space-around;
}

.profile-cards__stadistics-link {
    color: var(--var-bg-color);
    font-weight: bold;
}

.card-publicar {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: center;
    border: 1px solid var(--var-bg-color);
    background-color: #fff;
    border-radius: 10px;
}

.card-publicar__form-publicacion {
    padding: 10px;
}

.card-publicar__pensamiento {
    width: 100%;
    resize: none;
    height: 100px;
    border-radius: 10px;
    outline: none;
    padding: 5px;
    border: 1px solid var(--var-bg-color);
}

.card-publicar__upload-image {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-around;
    margin-top: 30px;
}

.card-publicar__icon {
    font-size: 30px;
    color: var(--var-bg-color);
}

.card-publicar__submit {
    background-color: var(--var-bg-color);
    color: whitesmoke;
    border-radius: 10px;
    padding: 5px;
    outline: none;
    border: none;
}

.main-section {
    background-color: white;
    border: 1px solid var(--var-bg-color);
    margin-top: 10px;
    border-radius: 10px;
    padding: 5px;
    
}

.main-publicaciones{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    color: whitesmoke;
    background-color: #3E3E3E;
    border-radius: 10px;
    padding: 20px;
    
    
}

.main-publicaciones__foto-perfil {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.main-publicaciones__otros {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    margin-top: 15px;
}

.main-publicaciones__descripcion-publicacion {
    font-size: 15px;
    letter-spacing: 1px;
    font-weight: 600;
}

.main-publicaciones__img-publicacion {
    border-radius: 10px;
    border: 1px solid var(--var-bg-color);
    width: 100%;
    height: 300px;
}

.main-publicaciones__btn-like {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    font-weight: bold;
    font-size: 20px;
}

.main-publicaciones__link {
    display: inline-block;
    color: var(--var-bg-color);
}

.main-publicaciones__comentar {
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
}

.main-publicaciones__form-comentar {
    padding: 8px;
}

.main-publicacion__comentar {
    width: 100%;
    resize: none;
    height: 100px;
    border-radius: 10px;
    outline: none;
    padding: 5px;
    border: 1px solid var(--var-bg-color);
}

.main-publicacion__btn-comentar {
    background-color: var(--var-bg-color);
    color: whitesmoke;
    border-radius: 10px;
    padding: 5px;
    outline: none;
    border: none;
}

.main-publicaciones__mis-comentarios {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    flex-wrap: nowrap;
    padding: 10px;
}

.main_publicaciones__foto-pertenece {
    width: 50px;
    height: 50px;
    border-radius:50%;
    margin-right: 20px;
}

.main-publicaciones__nombre-pertenece {
    font-weight: bold;
    font-size: 18px;
}

.main_publicaciones__comentario-pertenece {
    font-weight: bold;
    font-size: 12px;
}

.main-publicaciones__actions {
    float: right;
    margin-left: auto;
}

</style>

<div class="container">
    <div class="row">
        <div class="col-xl-4 col-l-4 col-md-12 col-sm-12 mt-3 " >
            <!-- profile column -->
            <div class="profile-card border ">
                <div class="profile-card__background">
                    <div class="profile-card__imagen-center">
                        <img src="<?php echo RUTA_PROJECT . '/' . $data['perfil']->fotoPerfil ?>" alt="" class="profile-card__imagen">
                    </div>
                    <div class="profile-card__separation"></div>
                </div>
                <a href="<?php echo RUTA_PROJECT?>/perfil/<?php echo $data['usuario']->usuario?>" class="nav-link">
                    <p class="profile-card__name"><?php echo $data['perfil']->nombreCompleto ?></p>
                </a>
                <div class="profile-cards__stadistics">
                    <a href="" class="nav-link profile-cards__stadistics-link">me gusta <br>0</a>
                    <a href="" class="nav-link profile-cards__stadistics-link">publicaciones <br>0</a>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-l-8 col-md-12 col-sm-12 mt-3">
            <!-- main column -->
            <?php if ($data['perfil']->idUsuario == $_SESSION['logueado']) : ?>
            <div class="card-publicar border">
                <form action="<?php echo RUTA_PROJECT ?>/publicacion/publicar" method="POST" class="card-publicar__form-publicacion" enctype="multipart/form-data">
                    <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['logueado'] ?>">
                    <textarea name="descripcion" class="form-control" placeholder="¿Que estas pensando?" required></textarea>
                    <div class="card-publicar__upload-image">
                        <i class="fa fa-image card-publicar__icon"></i>
                        <input type="file" name="foto" class="card-publicar__upload-input" required>
                        <button type="submit" class="btn btn-dark">Publicar</button>
                    </div>
                </form>
            </div>
            <?php endif; ?> 
            <?php foreach ($data['publicaciones'] as $datosPublicacion) : ?>
                <?php if ($datosPublicacion->idUsuario == $data['usuario']->idUsuario) : ?>
                <section class="main-section border">
                    <div class="main-publicaciones ">
                        <img src="<?php echo RUTA_PROJECT . '/' . $datosPublicacion->fotoPerfil ?>" alt="" class="main-publicaciones__foto-perfil">
                        <h4 class="main-publicaciones__nombre-perfil"><?php echo $datosPublicacion->nombreCompleto ?></h4>
                        <p class="main-publicaciones__fecha-publicacion"><?php echo $datosPublicacion->registrado ?></p>
                        <?php if ($datosPublicacion->idUsuario == $_SESSION['logueado']) : ?>
                            <a href="<?php echo RUTA_PROJECT ?>/publicacion/eliminarPublicacion/<?php echo $datosPublicacion->idPublicacion ?>" class="btn btn-success"><i class="fa fa-trash"></i></a>
                        <?php endif; ?>
                    </div>
                    <div class="main-publicaciones__otros ">
                        <h6 class="main-publicaciones__descripcion-publicacion"><?php echo $datosPublicacion->descripcion ?>
                        </h6>
                        <img src="<?php echo RUTA_PROJECT . '/' . $datosPublicacion->foto ?>" alt="" class="main-publicaciones__img-publicacion border">
                    </div>
                    <div class="main-publicaciones__btn-like">
                        <a href="<?php echo RUTA_PROJECT ?>/publicacion/megusta/<?php echo $_SESSION['logueado'] . '/' .  $datosPublicacion->idPublicacion . '/' . $datosPublicacion->idUsuario ?>" class="main-publicaciones__link nav-link" style="
                        <?php 
                        foreach($data['likes'] as $datosLike) :
                            if($datosLike->idPublicacion == $datosPublicacion->idPublicacion):
                                echo 'color: red';
                            endif;
                        endforeach;
                        ?>
                        ">
                            <i class="fa fa-heart"></i>
                            <span><?php echo $datosPublicacion->num_likes?></span>
                        </a>
                    </div>
                    <div class="main-publicaciones__comentar">
                        <form action="<?php echo RUTA_PROJECT?>/publicacion/comentar" method="post" class="main-publicaciones__form-comentar">
                            <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['logueado']?>">
                            <input type="hidden" name="idPublicacion" value="<?php echo $datosPublicacion->idPublicacion?>">
                            <input type="hidden" name="idUsuarioAccion" value="<?php echo $datosPublicacion->idUsuario?>">
                            <textarea name="comentario" class="form-control" placeholder="Comenta Algo"></textarea><br>
                            <button type="submit" class="btn btn-dark">Comentar</button>
                        </form>
                    </div>
                    <?php foreach ($data['comentarios'] as $datosComentario) : ?>
                    <?php if($datosComentario->idPublicacion == $datosPublicacion->idPublicacion) :?>
                        <div class="main-publicaciones__mis-comentarios">
                        <img src="<?php echo RUTA_PROJECT . '/' . $datosComentario->fotoPerfil ?>" alt="" class="main_publicaciones__foto-pertenece">
                        <div class="main-publicaciones__responsable">
                            <h6 class="main-publicaciones__nombre-pertenece"><?php echo $datosComentario->usuario ?>
                            </h6>
                            <p class="main_publicaciones__comentario-pertenece"><?php echo $datosComentario->comentario?></p>
                        </div>
                        <div class="main-publicaciones__actions">
                            <h6 class="main-publicaciones__actions-date"><?php echo $datosComentario->registrado?></h6>
                            <?php if ($datosComentario->idUsuario == $_SESSION['logueado']) : ?>
                                <a href="<?php echo RUTA_PROJECT?>/publicacion/eliminarComentario/<?php echo $datosComentario->idComentario?>" class="main-publicaciones__actions-delete"><i class="fa fa-trash"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </section>
                <?php endif; ?>   
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?php
include_once RUTA_APP . '/views/components/footer.php';

?>