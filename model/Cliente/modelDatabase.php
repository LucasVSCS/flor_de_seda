<?php

//Classe model do cliente com seus metodos para manuseamento dos seus registros no banco de dados
class Cliente
{

    //Metodo para inserir um novo registro de cliente no banco de dados, esta função recebe como parâmetro os campos do formulário da tela de cadastro de clientes
    public function insertCliente($cnpj, $razao, $fone_um, $fone_dois, $email, $estado, $cidade, $cep, $bairro, $logradouro, $complemento)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do INSERT do cliente em uma variável
        $query = "INSERT INTO clientes VALUES (0, '$cnpj', '$razao', '$fone_um', '$fone_dois', '$email', '$estado', '$cidade', '$cep', '$bairro', '$logradouro', '$complemento')";

        //Executando a query de insert
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);

        //Retorno da função exibindo a confirmação de cadastro de um novo cliente na base de dados
        echo "<script>alert('Cliente cadastrado com sucesso');</script>";
    }

    //Metodo para selecionar os dados de um cliente registrado, esta função recebe como parâmetro o id do cliente à ser consultado
    public function selectCliente($id)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do SELECT do cliente em uma variável
        $query = "SELECT * FROM clientes WHERE idClientes ='$id'";

        //Armazenando o resultado da consulta em uma varíavel
        $resultado = mysqli_query($conexao, $query);

        //Criando um array associativo com os dados obtidos através da query
        $dados = mysqli_fetch_assoc($resultado);

        //Iniciando uma sessão para serem armazenados os dados do cliente
        session_start();

        //Armazenando os dados do cliente na SESSION
        $_SESSION['id'] = $dados['idClientes'];
        $_SESSION['cnpj'] = $dados['cnpj'];
        $_SESSION['razao'] = $dados['razao'];
        $_SESSION['fone_um'] = $dados['fone_um'];
        $_SESSION['fone_dois'] = $dados['fone_dois'];
        $_SESSION['email'] = $dados['email'];
        $_SESSION['estado'] = $dados['estado'];
        $_SESSION['cidade'] = $dados['cidade'];
        $_SESSION['cep'] = $dados['cep'];
        $_SESSION['bairro'] = $dados['bairro'];
        $_SESSION['logradouro'] = $dados['logradouro'];
        $_SESSION['complemento'] = $dados['complemento'];

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);
    }

    //Metodo para realizar o update nos dados do cliente selecionado previamente, esta função recebe como parametro os novos dados à serem armazenados no banco de dados
    public function updateCliente($id, $cnpj, $razao, $foneUm, $foneDois, $email, $estado, $cidade, $cep, $bairro, $logradouro, $complemento)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do UPDATE do cliente em uma variável
        $query = "UPDATE clientes
        SET
        cnpj = '$cnpj',
        razao = '$razao',
        fone_um = '$foneUm',
        fone_dois = '$foneDois',
        email = '$email',
        estado = '$estado',
        cidade = '$cidade',
        cep = '$cep',
        bairro = '$bairro',
        logradouro = '$logradouro',
        complemento = '$complemento'
        WHERE idClientes = '$id'";

        //Executando a query de update
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);

        //Retorno da função exibindo a confirmação da atualização dos dados do cliente na base de dados
        echo "<script>alert('Cliente alterado com sucesso');</script>";
    }

    //Metodo para deletar o registro de um cliente na base de dados, esta função recebe como parâmetro o id do cliente à ser consultado
    public function deleteCliente($id)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do DELETE do cliente em uma variável
        $query = "DELETE FROM clientes WHERE idClientes='$id'";

        //Executando a query de update
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);

        //Retorno da função exibindo a confirmação da exclusão dos dados do cliente na base de dados
        echo "<script>alert('Cliente deletado com sucesso');</script>";
    }

}

//Conectando ao banco de dados
$con = new mysqli("localhost", "root", "", "floricultura");

//Consultando banco de dados
$qryLista = mysqli_query($con, "SELECT * FROM clientes");
$qtndClientes = mysqli_num_rows($qryLista);
