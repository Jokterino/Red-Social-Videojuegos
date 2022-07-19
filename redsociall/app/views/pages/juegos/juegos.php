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
    width: 200px;
    height: 290px;
    position: absolute;
    border-radius: 10%;
    top: 65px;
}

.profile-card__separation {
    width: 100%;
    height: 30px;
}

.profile-card__name {
    margin-top: 50px;
    font-weight: bold;
    font-size: 35px;
    color: var(--var-bg-color);
    text-align: center;
}
.profile-card__name2 {
    margin-top: 20px;
    font-weight: bold;
    font-size: 30px;
    color: var(--var-bg-color);
    text-align: center;
    margin-bottom: 0px;
}
.profile-card__name3 {
    margin-top: 0px;
    font-weight: bold;
    font-size: 30px;
    color: var(--var-bg-color);
    text-align: center;
    margin-bottom: 0px;
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
.profile-cards__stadistics-link4 {
    color: var(--var-bg-color);
    text-align: center;
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
    text-align: center;
    
    
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
    font-size: 20px;
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
.main-publicaciones__nombre-perfil {

text-align: center;


}
#form {
  width: 250px;
  margin: 0 auto;
  height: 50px;
}

#form p {
  text-align: center;
}

#form label {
  font-size: 20px;
}

input[type="radio"] {
  display: none;
}

label {
  color: grey;
}

.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label {
  color: #FFFF00;
  
}

input[type="radio"]:checked ~ label {
  color: #FFFF00;
}
.estrella{
    -webkit-text-stroke: 1px #6A6A6A;
    font-size: 50px;
}
.centrado{
    margin-left: 70px;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-xl-4 col-l-4 col-md-12 col-sm-12 mt-3 " >
            <!-- profile column -->
            <div class="profile-card border ">
                <div class="profile-card__background">
                    <div class="profile-card__imagen-center">
                        <img src="<?php echo RUTA_PROJECT . '/' . $data['juego']->fotoJuego ?>" alt="" class="profile-card__imagen">
                    </div>
                    <div class="profile-card__separation"></div>
                    
                    </div>
                    <br> <br> <br> <br> <br> <br> <br> <br>
                    <p class="profile-card__name"><?php echo $data['juego']->Nombre ?></p>
                <div class="profile-cards__stadistics">
                    <p href="" class="nav-link profile-cards__stadistics-link">Jugadores: <br><?php echo $data['juego']->cantidadJugadores ?></p>
                    <p  class="nav-link profile-cards__stadistics-link">Categoria: <br><?php if($data['juego']->categoria == 1){echo "Accion";}elseif ($data['juego']->categoria == 2) {echo "Plataformas";}elseif ($data['juego']->categoria == 3) {echo "Aventura";}elseif ($data['juego']->categoria == 4) {echo "Terror";} ?></p>
                </div>
                <p class="profile-card__name2"><?php echo $data['juego']->puntuacion ?></p>
    <form action="<?php echo RUTA_PROJECT ?>/juegos/valoracion" method="POST" >
    <input type="hidden" name="usuario" value="<?php echo $_SESSION['logueado']?>">
  <input type="hidden" name="juego" value="<?php echo $data['juego']->idJuego?>">
  <p class="clasificacion">
    <input id="radio1" type="radio" name="estrellas" value="5"><!--
    --><label for="radio1" class="estrella">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
    --><label for="radio2" class="estrella">★</label><!--
    --><input id="radio3" type="radio" name="estrellas"  value="3"><!--
    --><label for="radio3" class="estrella">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
    --><label for="radio4" class="estrella">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
    --><label for="radio5" class="estrella">★</label>
  </p>
  <button type="submit" class="btn btn-dark centrado" center >Votar</button>
</form>
<br><p href="" class="nav-link profile-cards__stadistics-link">Desarrolladora: </p><p class="profile-card__name3"><?php echo $data['juego']->creador ?></p>

<br><p class="nav-link profile-cards__stadistics-link"> Especificaciones:</p><p class="nav-link profile-cards__stadistics-link4"><?php echo $data['juego']->espMin ?></p><p class="nav-link profile-cards__stadistics-link4"><?php echo $data['juego']->espMax ?></p>
            </div>
        </div>
        <div class="col-xl-8 col-l-8 col-md-12 col-sm-12 mt-3">
            <!-- main column -->
                <section class="main-section border">
                    <div class="main-publicaciones ">
                        <h4 class="main-publicaciones__nombre-perfil">Descripcion del juego</h4>
                    </div>
                    <div class="main-publicaciones__otros ">
                        <h4 class="main-publicaciones__descripcion-publicacion"><?php echo $data['juego']->descripción ?>
                        </h4>
                    </div>
                    <iframe width="718" height="400" src="<?php echo $data['juego']->video ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <BR><BR>
                    <img src="<?php echo RUTA_PROJECT . '/' . $data['juego']->fotoGameplay1 ?>" alt="" width="718" height="400"><BR> <BR>
                    <img src="<?php echo RUTA_PROJECT . '/' . $data['juego']->fotoGameplay2 ?>" alt="" width="718" height="400"><BR> <BR>
                    <img src="<?php echo RUTA_PROJECT . '/' . $data['juego']->fotoGameplay3 ?>" alt="" width="718" height="400"><BR> <BR>
                    </div>
                    </div>
                    
                </section>

        </div>
    </div>
</div>


<?php
include_once RUTA_APP . '/views/components/footer.php';

?>