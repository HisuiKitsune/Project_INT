<?php
    define("HOST", "localhost");
    define("USER", "root");
    define("PORT", 3306);
    define("PASS", "bbm500");
    define("DATABASE", "SkateClub");

    function connect()
    {
        try {
            $key = 'strval';
            $con = new PDO("mysql:host={$key(HOST)};dbname={$key(DATABASE)}", USER, PASS)
            or die ("Erro ao tentar conectar no banco de dados");
            $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
           return $con;
        } catch (PDOException $error) {
            echo "Erro ao conectar ao banco. Erro: {$error->getMessage()}";
            exit;
        }
    } 