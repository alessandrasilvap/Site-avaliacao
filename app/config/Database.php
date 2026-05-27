<?php
class Database {
    public static function conectar() {
        return new PDO(
            "mysql:host=localhost;dbname=cadastro_usuario",
            "root",
            "" /*Senha do MySql*/
        );
    }
}
?>