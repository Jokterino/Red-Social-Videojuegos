<?php 

class Notificaciones extends Controller
{
    public function __construct()
    {
        $this->notificar = $this->model('Notificacion');
        $this->usuario = $this->model('Usuario');
        $this->publicar = $this->model('Publicar');
    }

    public function index()
    {
        if(isset($_SESSION['logueado'])) {
            $datosUsuario = $this->usuario->getUsuario($_SESSION['usuario']);
            $datosPerfil = $this->usuario->getPerfil($datosUsuario->idUsuario);
            $misNotificaciones = $this->publicar->getNotificaciones($_SESSION['logueado']);
            #$misMensajes = $this->publicar->getMensajes($_SESSION['logueado']);
            $notificaciones = $this->notificar->getAllNotifications($_SESSION['logueado']);
            $datoslogueado =$this->usuario->getlogueado($_SESSION['logueado']);
            $datoslogueado2 =$this->usuario->getlogueado2($_SESSION['logueado']);

            $datos = [
                'usuario' => $datosUsuario,
                'perfil' => $datosPerfil,
                'notificaciones' => $misNotificaciones,
                #'mensajes' => $misMensajes,
                'misNotificaciones' => $notificaciones,
                'logueado' =>$datoslogueado,
                'logueado2' =>$datoslogueado2,
                
            ];
            $this->view('pages/notificaciones/notificaciones' , $datos);

        } else {
            redirect('/home');
        }
    }

    public function eliminarNotificacion($id)
    {
        if(isset($_SESSION['logueado'])) {
            if($this->notificar->deleteNotificacion($id)) {
                redirect('/notificaciones');
            } else {
                redirect('/notificaciones');
            }
        } else {
            redirect('/home');
        }
    }
}