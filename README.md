# Projeto CRUD

Este projeto é um exemplo de um CRUD (Create, Read, Update, Delete) básico, implementado usando HTML, Bootstrap como framework de front-end, PHP como linguagem de back-end e MySQL como banco de dados.

## Requisitos

Antes de executar o projeto, certifique-se de ter os seguintes requisitos:

- Servidor web (por exemplo, Apache)
- PHP
- MySQL

## Configuração do Banco de Dados

1. Crie um banco de dados chamado "cadastro" no seu servidor MySQL.

2. Dentro do banco de dados "cadastro", crie uma tabela chamada "usuario" com a seguinte estrutura:

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(100) NOT NULL
);

## Configuração do Projeto:

1. Clone ou baixe os arquivos deste repositório para o diretório raiz do seu servidor web.

2. Abra o arquivo config.php e verifique se as configurações de acesso ao banco de dados estão corretas:

```
<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'cadastro');
try {
    $conn = new PDO('mysql:host='. HOST. ';dbname=' . BASE, USER, PASS);    
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage() . "<br />";
}
?>
```

Abra o arquivo index.php no seu navegador. Agora você poderá criar, ler, atualizar e excluir informações de usuários usando o formulário fornecido.

## Funcionalidades

Este projeto CRUD possui as seguintes funcionalidades:

**Criar**: Preencha o formulário de cadastro de usuários e envie as informações para serem adicionadas ao banco de dados.

**Ler**: Exibe uma tabela com os usuários cadastrados no banco de dados.

**Atualizar**: Selecione um usuário na tabela e edite suas informações usando o formulário de atualização.

**Excluir**: Selecione um usuário na tabela e exclua suas informações do banco de dados.
