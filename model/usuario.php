<?php
require_once ("../layout/connection.php");

class usuario
{
    private $idUsuario;
    private $nomeUsuario;
    private $emailUsuario;
    private $senhaUsuario;

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }

    public function getSenhaUsuario()
    {
        return $this->senhaUsuario;
    }

    public function getEmailUsuario()
    {
        return $this->emailUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }
    
    public function setEmailUsuario($emailUsuario)
    {
        $this->emailUsuario = $emailUsuario;
    }

    public function setNomeUsuario($nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;
    }

    public function setSenhaUsuario($senhaUsuario)
    {
        $this->senhaUsuario = $senhaUsuario;
    }

    public function listar(){
        $con = Conexao :: conectar();
        $query = "SELECT idUsuario,nomeUsuario,senhaUsuario FROM tbusuario";
        $resultado = $con->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

}
