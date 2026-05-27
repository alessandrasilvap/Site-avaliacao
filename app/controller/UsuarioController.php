<?php
    session_start();

    require_once "../model/Usuarios.php";

    class UsuarioController {
        public function cadastrarPrimeiraEtapa() {
            /*Pegando os dados do Form*/
            $dados = [
                'nome' => $_POST['nome'], /*'$_POST' São os dados enviados pelo Form*/
                'data' => $_POST['data'],
                'select' => $_POST['select'],
                'nomeMaterno' => $_POST['nomeMaterno'],
                'cpf' => $_POST['cpf'],
            ];

            $usuario = new Usuario();

            $id = $usuario->salvarPrimeiraEtapa($dados);

            $_SESSION['usuario_id'] = $id;

            header("Location: ../views/pagina2.php");
            exit; /*Impede o PHP de continuar executando código depois do redirecionamento*/
        }

        public function cadastrarSegundaEtapa() {
            /*Pegando os dados do Form*/
            $dados = [
                'id' => $_SESSION['usuario_id'], /*'$_POST' São os dados enviados pelo Form*/
                'celular' => $_POST['celular'], 
                'telFixo' => $_POST['telFixo'],
                'cep' => $_POST['cep'],
                'endereco' => $_POST['endereco'],
                'login' => $_POST['login'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT)
            ];

            $usuario = new Usuario();

            $usuario->salvarSegundaEtapa($dados);

            header("Location: https://alessandrasilvap.github.io/Portfolio-website/");
        }
    }

    $controller = new UsuarioController();

    if (isset($_POST['nome'])) {
        $controller->cadastrarPrimeiraEtapa();
    }

    if (isset($_POST['celular'])) {
        $controller->cadastrarSegundaEtapa();
    }
?>