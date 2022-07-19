<?php require_once RUTA_APP . '/views/components/header.php'; ?>

<style>
.unico{
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
    <form action="<?php echo RUTA_PROJECT?>/home/insertarRegistrosPerfil" method="post" class="main-form" enctype="multipart/form-data">
        <h4 class="main-form__title">Completa tu perfil :)</h4>
        <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['logueado'] ?>">
        <input type="text" name="nombreCompleto" id="nombre" class="form-control unico" placeholder="Nombre completo" required>
        <input type="file" name="fotoPerfil" id="foto" class="form-control" required><br>
        <button class="btn btn-dark">finalizar</button>
    </form>
</div>

<?php require_once RUTA_APP . '/views/components/footer.php'; ?>