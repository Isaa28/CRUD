<link rel="stylesheet" href="tabela-fornecedores.css">
<?php
    require_once 'conexao.php';
    $dados = $conexao->prepare('SELECT * FROM fornecedores;');
    $dados->execute();
?>
<body>
    <h1>fornecedores cadastrados</h1>
    <table id="tabela">
        <head id="cabecadatabela">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </head>
        <body id="corpodatabela">
<?php
    while($rows = $dados->fetch(PDO::FETCH_OBJ)){
        echo '<tr>'. '<th>' . $rows->ID .'</th> <th>'. $rows->Nome .'</th> <th>'. $rows->Email .'</tr>';
        echo '<br>';
    }
?>
        </body>
    </table>
</body>