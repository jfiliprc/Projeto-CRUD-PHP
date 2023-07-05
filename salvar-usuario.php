<?php
require('config.php');
            switch($_REQUEST['action']){
                case "cadastrar":
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES('{$nome}','{$email}','{$senha}')";
                    
                    $res = $conn->prepare($sql);
                    $res -> execute();

                    if ($res == true) {
                        echo("<script> alert('Sucesso no cadastro!')</script>");
                        echo("<script> location.href = 'listar-usuario.php'</script>");
                    } else {
                        echo("<script> alert('Falha no cadastro!')</script>");
                        echo("<script> location.href = 'listar-usuario.php'</script>");
                    }
                    break;
                case "editar":
                    break;
                case "excluir":
                    break;
            }
?>