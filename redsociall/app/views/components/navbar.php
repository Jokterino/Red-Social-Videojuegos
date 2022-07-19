<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <div class="container">
        <a class="navbar-brand" href="#"><?php echo NAME_PROJECT ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo RUTA_PROJECT ?>/home">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo RUTA_PROJECT ?>/juegos/aleatorio">
                        Juego Aleatorio</i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo RUTA_PROJECT ?>/juegos">
                        Juegos</i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo RUTA_PROJECT ?>/notificaciones">
                        Notificaciones
                            <?php
                            if ($data['notificaciones'] > 0) :
                            ?>
                                <span class="badge badge-warning"><?php echo $data['notificaciones'] ?></span>
                            <?php
                            endif;
                            ?>
                        
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo RUTA_PROJECT . '/' . $data['logueado']->fotoPerfil ?>" alt="foto perfil" style="width: 30px; height: 30px; border-radius: 50%" />
                            <?php echo ucwords($_SESSION['usuario']); ?>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo RUTA_PROJECT ?>/perfil/<?php echo $data['logueado2']->usuario?>">perfil</a>
                            <a class="dropdown-item" href="<?php echo RUTA_PROJECT ?>/home/logout">cerrar sesion</a>
                        </div>
                    </div>
                </li>
            </ul>
            <form class="form-inline ml-auto" action="<?php echo RUTA_PROJECT?>/home/buscar" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="buscar">
                <button class="btn btn-light  my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>