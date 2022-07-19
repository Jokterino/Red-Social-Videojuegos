<?php

class Juegos extends Controller
{

    public function __construct()
    {
        $this->usuario = $this->model('Usuario');
        $this->publicar = $this->model('Publicar');
        $this->perfil = $this->model('PerfilM');
        $this->juego = $this->model('Juego');
    }
    

    public function index()
    {
        $datoslogueado =$this->usuario->getlogueado($_SESSION['logueado']);
        $datoslogueado2 =$this->usuario->getlogueado2($_SESSION['logueado']);
        $misNotificaciones = $this->publicar->getNotificaciones($_SESSION['logueado']);
        $juegos = $this->juego->getJuegos();
        


        $datosRed = [
            'notificaciones' => $misNotificaciones,
            'logueado' =>$datoslogueado,
            'logueado2' =>$datoslogueado2,
            'juegos' =>$juegos,
            


        ];

        $this->view('pages/juegos/listaJuegos' , $datosRed);

    }

    public function juego($idjuego)
    {
        $datoslogueado =$this->usuario->getlogueado($_SESSION['logueado']);
        $datoslogueado2 =$this->usuario->getlogueado2($_SESSION['logueado']);
        $misNotificaciones = $this->publicar->getNotificaciones($_SESSION['logueado']);
        $juego = $this->juego->getJuego($idjuego);
        


        $datosRed = [
            'notificaciones' => $misNotificaciones,
            'logueado' =>$datoslogueado,
            'logueado2' =>$datoslogueado2,
            'juego' =>$juego,
            

        ];

        $this->view('pages/juegos/juegos' , $datosRed);
        

    }
    public function valoracion()
    {
        $datosval = [
            'idusuario' => trim($_POST['usuario']),
            'idjuego' => trim($_POST['juego']),
            'valoracion' => $_POST["estrellas"]
        
        ];
       
        
        if($this->juego->insertarvaloracion($datosval)){
            
            $valoraval = $this->juego->Valoraciones($datosval);
            $divisor = count( $valoraval);
            $prom=0;
            foreach($valoraval as $count){
                $prom = $prom + $count->calificacion;

            }
            $prom= number_format($prom/$divisor,1,","," ");
            if($this->juego->insertarPromedio($prom,$datosval)){
                $datoslogueado =$this->usuario->getlogueado($_SESSION['logueado']);
        $datoslogueado2 =$this->usuario->getlogueado2($_SESSION['logueado']);
        $misNotificaciones = $this->publicar->getNotificaciones($_SESSION['logueado']);
        $juego = $this->juego->getJuego($_POST['juego']);


                 $datosRed = [
            'notificaciones' => $misNotificaciones,
            'logueado' =>$datoslogueado,
            'logueado2' =>$datoslogueado2,
            'juego' =>$juego,

        ];
                $this->view('pages/juegos/juegos' , $datosRed);
                echo $_SESSION['logueado'];
            }
        }
   
    }


    public function aleatorio(){
        $juegos = $this->juego->getJuegos();
        $max = count( $juegos);
        $idjuego=rand(1, $max);
        $datoslogueado =$this->usuario->getlogueado($_SESSION['logueado']);
        $datoslogueado2 =$this->usuario->getlogueado2($_SESSION['logueado']);
        $misNotificaciones = $this->publicar->getNotificaciones($_SESSION['logueado']);
        $juego = $this->juego->getJuego($idjuego);
        


        $datosRed = [
            'notificaciones' => $misNotificaciones,
            'logueado' =>$datoslogueado,
            'logueado2' =>$datoslogueado2,
            'juego' =>$juego,
            

        ];

        $this->view('pages/juegos/juegos' , $datosRed);
        


    }
   
}