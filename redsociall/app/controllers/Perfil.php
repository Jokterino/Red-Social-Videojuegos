<?php

class Perfil extends Controller
{
    public function __construct()
    {
        $this->usuario = $this->model('Usuario');
        $this->publicar = $this->model('Publicar');
        $this->perfil = $this->model('PerfilM');
    }

    public function index($usuario)
    {
        if(isset($_SESSION['logueado'])) {
            $datosUsuario = $this->usuario->getUsuario($usuario);
            $datosPerfil = $this->usuario->getPerfil($datosUsuario->idUsuario);
            $misNotificaciones = $this->publicar->getNotificaciones($_SESSION['logueado']);
            $datosPublicacion = $this->publicar->getPublicaciones();
            $datosLike = $this->publicar->misLikes($_SESSION['logueado']);
            $datosComentarios = $this->publicar->getComentarios();
            $datoslogueado =$this->usuario->getlogueado($_SESSION['logueado']);
            $datoslogueado2 =$this->usuario->getlogueado2($_SESSION['logueado']);
            #$misMensajes = $this->publicar->getMensajes($_SESSION['logueado']);

            $datos = [
                'usuario' => $datosUsuario,
                'perfil' => $datosPerfil,
                'notificaciones' => $misNotificaciones,
                'publicaciones' => $datosPublicacion,
                'likes' => $datosLike,
                'comentarios' => $datosComentarios,
                'logueado' =>$datoslogueado,
                'logueado2' =>$datoslogueado2,
                #'mensajes' => $misMensajes
                
            ];
            $this->view('pages/perfil/perfil', $datos);
        }
    }
}
