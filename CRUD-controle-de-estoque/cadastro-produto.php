<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/cadastros.css">
</head>
<body>
    <menu id="menu">
        <div id="logo">
            <img width = "110px" src="assets/imagens/logo.png" alt="Logo">
        </div>
        <div id="menu-links">
            <li><a href="tela-inicial.php">Home</a></li>
            <li><a href="#">Entradas</a></li>
            <li><a href="#">Saídas</a></li>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Fornecedores</a></li>
            <li><a href="#">Categorias</a></li>
        </div>
        <div>
            <button id="botao-perfil">
            <img width="40px" src="assets/imagens/icon-perfil.svg" alt="Seu perfil">
            </button>
        </div>
    </menu>
    <div id="caixa-cadastro">
        <h1 id="titulo">Cadastro de categoria</h1>
        <div id="formulario">
            <form action="" method="post">
                <label class="rotulo" for="nome-fornecedor">Nome do fornecerdor:</label>
                <input class="caixadeentrada" type="text" id="nome-fornecedor" name="nome-fornecedor" placeholder="Ex: Mirão distribuidora">
                <br>
                <label class="rotulo" for="telefone">telefone:</label>
                <input class="caixadeentrada" type="text" id="telefone" name="telefone" placeholder="Ex: Mirão distribuidora">
                <br>
                <label class="rotulo" for="cnpj">CNPJ:</label>
                <input class="caixadeentrada" type="text" id="cnpj" name="cnpj" placeholder="Ex: Mirão distribuidora">
                <br>
                <label class="rotulo" for="email-de-contato">Email do fornecedor:</label>
                <input class="caixadeentrada" type="email" id="email-de-contato" name="email-de-contato" placeholder="Ex: fornercerdor123@gmail.com">
                <br>
                <label class="rotulo" for="endereco">Endereço:</label>
                <input class="caixadeentrada" type="text" id="endereco" name="endereco" placeholder="Ex: Mirão distribuidora">
                <br>
                <button class="botoes" onclick="window.location.href='tela-inicial.php'" >Cancelar</button>
                <button class="botoes" type="submit">Salvar</button>
            </form>    
        </div>
    </div>
</body>
</html>