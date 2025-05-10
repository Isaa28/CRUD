<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de fornecedor</title>
    <link rel="stylesheet" href="cadastro-fornecedor.css">
</head>
<body>
    <div id="caixa-cadastro">
        <h1 id="titulo">Cadastro de fornecedor</h1>
        <div id="formulario">
            <form action="form.php" method="post">
                <label class="rotulo" for="nome-fornecerdor">Nome do fornecerdor:</label>
                <input class="caixadeentrada" type="text" id="nome-fornecerdor" name="nome-fornecerdor" placeholder="Ex: Mirão distribuidora">
                <br>
                <label class="rotulo" for="email-de-contato">Email do fornecedor:</label>
                <input class="caixadeentrada" type="email" id="email-de-contato" name="email-de-contato" placeholder="Ex: fornercerdor123@gmail.com">
                <button class="botoes" type="submit">Cadastrar fornecerdor
                </button>
            </form>    
        </div>        
    
        <form action="exibir.php">
            <input class="botao-secundario" type="submit" value="Ver meus cadastros">
        </form>
    </div>
</body>
</html>