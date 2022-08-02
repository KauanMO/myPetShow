<?php

    class Connection {
        public static function conectar() {
            $conexao = new PDO("mysql: host=localhost;
            dbname=bdpetshow",
            "root",
            "");
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->exec("SET CHARACTER SET utf8;");
            return $conexao;
        }
    }
?>