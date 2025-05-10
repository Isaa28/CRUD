<?php 
    if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $nome != "") {
        try {
            require_once 'conexao.php';
            if(isset($_POST['nome-fornecerdor'], $_POST['email-de-contato'])){
                $nomeFornecedor = $_POST['nome-fornecerdor'];
                $email = $_POST['email-de-contato'];
                $dados = $conexao->prepare(query:'INSERT INTO fornecedores (Nome,Email) VALUES (:nome, :email)');
                $dados->bindValue(':nome', $nomeFornecedor); 
                $dados->bindValue(':email', $email);
                if($dados->execute()){
                    if($dados->rowCount() > 0){
                        echo 'Dados cadastrados com sucesso!';
                        $id = null;
                        $nomeFornecedor = null;
                        $email = null;
                    }else{
                        echo 'Erro ao tentar efetivar cadastro';
                    }
                }else{
                    throw new PDOException("Erro: Não foi possível executar a declaração sql");
                }
            }else{
                echo '[ERRO]Dados não encontrados.';
            }
        }catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }   
    }else{
        echo 'Nenhum dado foi informado';
    }
?>