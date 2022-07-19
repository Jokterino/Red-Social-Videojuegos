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
<div class="contenedor">
<img src="<?php echo RUTA_PROJECT?>/img/gamer1.png" alt="imagen del login" height="500px">
    <form action="<?php echo RUTA_PROJECT?>/home/register" method="post" class="main-form">
        <h4 class="main-form__title">Regístrate</h4>
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" required>
        <input type="email" name="email" id="email" class="form-control" placeholder="Correo" required>
        <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Contraseña" required>
        <p class="main-form__paragraph">Ya tienes Cuenta?
            <a href="<?php echo RUTA_PROJECT?>/home/login" >Iniciar sesion</a>
        </p>
        <button class="btn btn-dark">registrarme</button>
        <?php 
            if(isset($_SESSION['errorRegistro'])) {
                echo '<div class="alert alert-danger alert-dismissible fade show mt-sm-2" role="alert">
                        '. $_SESSION['errorRegistro'] .'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            } unset($_SESSION['errorRegistro']);
        ?>
    </form>
</div>

<?php require_once RUTA_APP . '/views/components/footer.php'; ?>