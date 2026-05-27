<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Avaliação</title>
    <link rel="icon" href="/img/img.png">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header> <h2>CADASTRO DE USUÁRIO</h2> </header>
    <hr>
    <div class="container">
        <form action="../app/controller/UsuarioController.php" method="POST" onsubmit="return validarFormulario()">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome">

            <label>Data de nascimento:</label>
            <input type="date" id="data" name="data">
            
            <label>Sexo:</label>
            <select id="select" name="select">
                <option value="1">Selecione</option>
                <option value="2">Feminino</option>
                <option value="3">Masculino</option>
                <option value="4">Outro</option>
            </select>
            
            <label>Nome Materno:</label>
            <input type="text" id="nomeMaterno" name="nomeMaterno" placeholder="Digite...">
            
            <label>CPF:</label>
            <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" oninput="mascaraCPF(this)" maxlength="14">
            
            <button type="submit" id="botao" name="botao">
                CONTINUAR
            </button>
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