<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Avaliação</title>
    <link rel="icon" href="/img/img.png">
    <link rel="stylesheet" href="/css/avaliacao.css">
</head>
<body>
    <header> <h2>CADASTRO DE USUÁRIO</h2> </header>
    <hr>
    <div class="container">
        <form action="../app/controller/UsuarioController.php" method="POST" onsubmit="return validarFormu()">
            <label>Telefone Celular:</label> 
            <input type="text" id="celular" name="celular" placeholder="+00(00)00000-0000" oninput="mascaraCel(this)" maxlength="17">

            <label>Telefone Fixo:</label>
            <input type="text" id="telFixo" name="telFixo" placeholder="0000-0000" oninput="mascaraTelFixo(this)" maxlength="9">

            <label>CEP:</label>

            <div class="cep-container">
                <input type="text" id="cep" name="cep" placeholder="00000-000" oninput="formatarCEP(this)">
                <button type="button" id="buscar" name="buscar">Buscar</button>
            </div>

            <input type="text" id="endereco" name="endereco" placeholder="Endereço:" readonly>

            <label>Login:</label>
            <input type="text" id="login" name="login" placeholder="Crie seu login:" maxlength="5" onclick="validarLogin()">

            <label>Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Crie sua senha:" maxlength="7">

            <label>Confirma senha:</label>
            <input type="password" id="confirmasenha" name="confirmasenha" placeholder="Confirme senha:" maxlength="7">

            <div class="botoes-container">
                <button type="button" class="botoes" name="botoes">
                    <a href="../views/index.php">VOLTAR</a>
                </button>

                <button type="submit" class="botoes" name="botoes">
                    ENVIAR
                </button>

                <button type="reset" class="botoes" name="botoes">
                    LIMPAR
                </button>
            </div>
        </form>

        <div class="meio-circulo">
            <img src="/img/img.png" alt="desenho de mulher mexendo no computador">
        </div>
    </div>
    <br>
    <footer>
        <div>
            <h3 class="integrantes">Integrantes</h3>
            <ul class="lista">
                <li class="nome">Design UX/UI: Anônimo</li>
                <li class="nome">Analista e Desenvolvedora de Sistema: Alessandra Cristina da Silva Pereira</li>
            </ul>
        </div>
    </footer>
    <script src="/js/script.js"></script>
</body>
</html>