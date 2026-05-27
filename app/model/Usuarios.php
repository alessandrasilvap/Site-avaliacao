<?php
    /*A Model salva no banco.*/
    require_once "../config/Database.php";

    class Usuario {
        public function salvarPrimeiraEtapa($dados) { /*'$dados' Vai ser um array vindo do controller.*/
            $pdo = Database::conectar();

            $sql = "INSERT INTO usuarios (nome, data_nascimento, sexo, nome_materno, cpf) 
                VALUES (:nome, :data, :sexo, :nomeMaterno, :cpf)";

            $stmt = $pdo->prepare($sql);

            /*Ligando os dados*/
            $stmt->bindValue(':nome', $dados['nome']);
            $stmt->bindValue(':data', $dados['data']);
            $stmt->bindValue(':sexo', $dados['select']);
            $stmt->bindValue(':nomeMaterno', $dados['nomeMaterno']);
            $stmt->bindValue(':cpf', $dados['cpf']);

            $stmt->execute();

            return $pdo->lastInsertId();
        }

        public function salvarSegundaEtapa($dados) {
            $pdo = Database::conectar();

            $sql = "UPDATE usuarios SET 
                celular = :celular,
                telFixo = :telFixo,
                cep = :cep,
                endereco = :endereco,
                login = :login,
                senha = :senha
                WHERE id = :id";

            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(':celular', $dados['celular']);
            $stmt->bindValue(':telFixo', $dados['telFixo']);
            $stmt->bindValue(':cep', $dados['cep']);
            $stmt->bindValue(':endereco', $dados['endereco']);
            $stmt->bindValue(':login', $dados['login']);
            $stmt->bindValue(':senha', $dados['senha']);
            $stmt->bindValue(':id', $dados['id']);

            $stmt->execute();
        }
    }
?>