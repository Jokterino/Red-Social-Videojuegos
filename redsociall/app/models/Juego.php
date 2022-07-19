<?php

class Juego
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function getJuegos()
    {
        $this->db->query("SELECT * FROM juego");
        return $this->db->registers();
    }

    public function getJuego($id)
    {
        $this->db->query("SELECT * FROM juego WHERE idJuego = :idJuego");
        $this->db->bind(':idJuego', $id);
        return $this->db->register();
    }
    public function insertarvaloracion($datosval){
        $this->db->query("INSERT INTO puntuacion(idUsuario, idJuego, calificacion) VALUES(:usuario, :juego, :calificacion)");
        $this->db->bind(':usuario', $datosval['idusuario']);
        $this->db->bind(':juego', $datosval['idjuego']);
        $this->db->bind(':calificacion', $datosval['valoracion']);
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
 
    public function Valoraciones($datosval){
        $this->db->query("SELECT calificacion FROM puntuacion WHERE idJuego = :idjuego");
        $this->db->bind(':idjuego' , $datosval['idjuego']);
        $this->db->execute();
        return $this->db->registers();


    }
    public function insertarPromedio($prom,$datosval){
        $this->db->query("UPDATE juego SET puntuacion = :prom WHERE idJuego = :idjuego");
        $this->db->bind(':prom', ($prom));
        $this->db->bind(':idjuego', $datosval['idjuego']);

        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function comprobarVoto($datosval){
        $this->db->query("SELECT * FROM puntuacion WHERE idJuego = :idjuego" );
        $this->db->bind(':idjuego' , $datosval['idjuego']);
        $this->db->execute();
        return $this->db->registers();


    }
    public function buscarj($busqueda)
    {
        $this->db->query('SELECT idJuego ,Nombre , creador , fotoJuego FROM juego WHERE Nombre LIKE :buscar ');
        $this->db->bind(':buscar' , $busqueda);
        return $this->db->registers();
    }

}