<?php 
        try {
            require_once 'conexao.php';
            if(isset($_POST['nome-empresa'], $_POST['cnpj'], $_POST['senha'])){
                $nomeEmpresa = $_POST['nome-empresa'];
                $cnpj = $_POST['cnpj'];
                $senha = $_POST['senha'];
                $stmt = $conexao->prepare(query:'INSERT INTO  (Nome_da_empresa, cnpj, Senha) VALUES (:nome, :senha)');
                $stmt->bindValue(':nome', $nomeEmpresa); 
                $stmt->bindValue(':cnpj', $cnpj);
                $stmt->bindValue(':senha', $senha);
                if($stmt->execute()){
                    if($stmt->rowCount() > 0){
                        echo 'Dados cadastrados com sucesso!';
                        $id = null;
                        $nomeEmpresa = null;
                        $cnpj = null;
                        $senha = null;
                        header("Location: tela-inicial.php");
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
?>