<?php

//Classe model do fornecedor com seus metodos para manuseamento dos seus registros no banco de dados
class Fornecedor
{

    //Metodo para inserir um novo registro de fornecedor no banco de dados, esta função recebe como parâmetro os campos do formulário da tela de cadastro de fornecedores
    public function insertFornecedor($cnpj, $razao, $fone_um, $fone_dois, $email, $estado, $cidade, $cep, $bairro, $logradouro, $complemento)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

         //Armazenando a query do INSERT do fornecedor em uma variável
        $query = "INSERT INTO fornecedores VALUES (0, '$cnpj', '$razao', '$fone_um', '$fone_dois', '$email', '$estado', '$cidade', '$cep', '$bairro', '$logradouro', '$complemento')";
        
        //Executando a query de insert
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);
    }

    //Metodo para selecionar os dados de um fornecedor registrado, esta função recebe como parâmetro o id do fornecedor à ser consultado
    public function selectFornecedores($id)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do SELECT do fornecedor em uma variável
        $query = "SELECT * FROM fornecedores WHERE idFornecedores ='$id'";

        //Armazenando o resultado da consulta em uma varíavel
        $resultado = mysqli_query($conexao, $query);

        //Criando um array associativo com os dados obtidos através da query
        $dados = mysqli_fetch_assoc($resultado);

        //Iniciando uma sessão para serem armazenados os dados do fornecedor
        session_start();

        //Armazenando os dados do fornecedor na SESSION
        $_SESSION['id'] = $dados['idFornecedores'];
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

    //Metodo para realizar o update nos dados do fornecedor selecionado previamente, esta função recebe como parametro os novos dados à serem armazenados no banco de dados
    public function updateFornecedor($id, $cnpj, $razao, $foneUm, $foneDois, $email, $estado, $cidade, $cep, $bairro, $logradouro, $complemento)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do UPDATE do fornecedor em uma variável
        $query = "UPDATE fornecedores
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
        WHERE idFornecedores = '$id'";

        //Executando a query de update
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);
    }

    //Metodo para deletar o registro de um cliente na base de dados, esta função recebe como parâmetro o id do cliente à ser consultado
    public function deleteFornecedor($id)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do DELETE do fornecedor em uma variável
        $query = "DELETE FROM fornecedores WHERE idFornecedores='$id'";
        
        //Executando a query de update
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);
    }

}
