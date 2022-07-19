<?php require_once RUTA_APP . '/views/components/header.php'; ?>
<style>
.form-control{
    width: 420px;
    outline: none;
    padding: 10px;
    margin: 10px 0 10px 0;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}


</style>
<div class="contenedor " >
    <img src="<?php echo RUTA_PROJECT?>/img/gamer1.png" alt="imagen del login" height="500px">
    <form action="<?php echo RUTA_PROJECT?>/home/login" method="post" class="main-form">
        <h4 class="main-form__title">Iniciar sesion</h4>
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" required>
        <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Contraseña" required>
        <p class="main-form__paragraph">No tienes Cuenta? 
            <a href="<?php echo RUTA_PROJECT?>/home/register" >Registrarme</a>
        </p>
        <button class="btn btn-dark">Iniciar sesion</button>
        <?php 
            //alerta si hay error al loguearse
            if(isset($_SESSION['errorLogin'])) {
                echo '<div class="alert alert-danger alert-dismissible fade show mt-sm-2" role="alert">
                        '. $_SESSION['errorLogin'] .'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            } unset($_SESSION['errorLogin']);

            //alerta de registro exitoso
            if(isset($_SESSION['registroCompleto'])) {
                echo '<div class="alert alert-success alert-dismissible fade show mt-sm-2" role="alert">
                        '. $_SESSION['registroCompleto'] .'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            } unset($_SESSION['registroCompleto']);
        ?>
    </form>
</div>

<?php require_once RUTA_APP . '/views/components/footer.php'; ?>