<?php
    include_once "./connection.php";

    require_once "../model/usuario.php";

    $usuario= new Usuario();

    $idCadastro = $_POST["idCadastro"];
    $userCadastro = $_POST["userCadastro"];
    $emailCadastro = $_POST["emailCadastro"];
    $senhaCadastro = $_POST["senhaCadastro"];
    $confirmSenha = $_POST["confirmSenhaCadastro"];

    $usuario->setNomeUsuario($userCadastro);
    $usuario->setEmailUsuario($emailCadastro);
    $usuario->setSenhaUsuario($senhaCadastro);

    $usuario->cadastrar($usuario);

           header("location:../index.php");
?>