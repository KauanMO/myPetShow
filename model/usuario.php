<?php
require_once ("../database/connection.php");
session_start();
class Usuario
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

    public function cadastrar($usuario){
        $conexao = Connection::conectar();
        $stmt = $conexao->prepare("INSERT INTO tbusuario VALUES (DEFAULT, ?, ?, ?)");
        $stmt->bindValue(1, $usuario->getNomeUsuario());
        $stmt->bindValue(2, $usuario->getEmailUsuario());
        $stmt->bindValue(3, $usuario->getSenhaUsuario());
        $stmt->execute();
    }

    public function verificaLogin($email, $senha){
        $con = Connection::conectar();
        $aprovado = "";
        $query = "SELECT idUsuario, nomeUsuario, emailUsuario, senhaUsuario FROM tbusuario";
        $resultado = $con->query($query);
        $lista = $resultado->fetchAll();
        
        foreach ($lista as $linha => $value) {
            if(($lista[$linha]['emailUsuario'] == $email) && ($lista[$linha]['senhaUsuario'] == $senha)){
                $aprovado = "sim";
            }
        }
        if($aprovado == "sim"){
            return true;
        }
        else{
            return false;
        }
    }

    public function buscaID($email) {
        $con = Connection::conectar();
        $query = "SELECT idUsuario FROM tbusuario WHERE emailUsuario = ".$e;
        $resultado = $con->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function buscaUsuario($id) {
        $con = Connection::conectar();
        $query = "SELECT idUsuario,nomeUsuario,emailUsuario,senhaUsuario FROM tbusuario WHERE idUsuario = ".$id;
        $resultado = $con->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

}
