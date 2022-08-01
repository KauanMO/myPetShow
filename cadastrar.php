<?php

    include_once "./conexao.php";

    require_once "./models/usuario.php";

    $pdo = Connection::conectar();

    $idCadastro = $_POST["idCadastro"];
    $userCadastro = $_POST["userCadastro"];
    $emailCadastro = $_POST["emailCadastro"];
    $senhaCadastro = $_POST["senhaCadastro"];
    $confirmSenha = $_POST["confirmSenhaCadastro"];
    
    if (strlen($userCadastro) < 4) {
        setcookie(
            "usuario-pequeno",
            $info = "Usuário muito pequeno",
            time() + 1,
            "/"
        );
        header("location:./index.php");
    }else if (strlen($senhaCadastro) < 6) {
        setcookie(
            "senha-pequena",
            $info = "Senha muita pequena",
            time() + 1,
            "/"
        );
        header("location:./index.php");
    }else if ($senhaCadastro != $confirmSenha) {
        setcookie(
             "senhas-diferentes",
             $info = "Senhas não coincindem",
             time() + 1,
             "/"
         ); 
          header("location:./pagCadastro.php");
        }else {
            $stmt = $pdo->prepare(
                "insert into tbUsuario values(null, '$userCadastro',$emailCadastro, '$senhaCadastro')"
            );
            $stmt->execute();
            header("location:../index.php");
        }
?>