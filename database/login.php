<?php
    require_once "../model/usuario.php";

    $usuario = new Usuario();

    
    $emailLogin = $_POST["emailLogin"];
    $senhaLogin = $_POST["senhaLogin"];


    $login = $usuario->verificaLogin($emailLogin, $senhaLogin);
    if($login == true) {
        $listConfirm = $usuario->buscaID($emailLogin);
        $id = "";
        foreach ($listConfirm as $linha) {
           $id = $linha['idUsuario'];
        }
        $listaDadosUser = $usuario->buscaUsuario($id);
        foreach ($listaDadosUser as $linha) {
            session_start();
            $_SESSION['email'] = $linha['email'];
            $_SESSION['nome'] = $linha['nomeUsuario'];
            $_SESSION['senha'] = $linha['senhaUsuario'];
            $_SESSION['id'] = $linha['idUsuario'];
            header('location: teste.php');
        }
    }else{

    }

?>