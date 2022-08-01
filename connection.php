<?php

    class Conecction {
        public static function conectar() {
            $conexao = new PDO("mysql: host=localhost;
            bdname=bdPetShow",
            "root",
            "");
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->exec("SET CHARACTER SET utf8;");
            return $conexao;
        }
    }


?>