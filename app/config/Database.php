<?php
class Database {
    public static function conectar() {
        try {
            $pdo = new PDO(
                "mysql:host=localhost;dbname=cadastro_usuario",
                "root",
                "" /*Senha do MySql*/
            );

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            return $pdo;
        } catch (PDOException $erro) {
            die("Erro na conexão: " . $erro->getMessage());
        }
    }
}
?>