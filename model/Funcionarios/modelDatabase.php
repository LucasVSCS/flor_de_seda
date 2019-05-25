<?php

//Classe model do funcionario com seus metodos para manuseamento dos seus registros no banco de dados
class Funcionario
{

    //Metodo para inserir um novo registro de funcionario no banco de dados, esta função recebe como parâmetro os campos do formulário da tela de cadastro de funcionarios
    public function insertFuncionario($nome, $cpf, $salario, $email, $telefone, $nivelAcesso)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do INSERT do cliente em uma variável
        $query = "INSERT INTO funcionarios VALUES (0, '$nome', '$cpf', '$salario', '$email', '$telefone', '$nivelAcesso')";
        
        //Executando a query de insert
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);
    }

    //Metodo para selecionar os dados de um funcionario registrado, esta função recebe como parâmetro o id do funcionario à ser consultado
    public function selectFuncionarios($id)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do SELECT do cliente em uma variável
        $query = "SELECT * FROM funcionarios WHERE idFuncionarios ='$id'";

        //Armazenando o resultado da consulta em uma varíavel
        $resultado = mysqli_query($conexao, $query);

        //Criando um array associativo com os dados obtidos através da query
        $dados = mysqli_fetch_assoc($resultado);

        //Iniciando uma sessão para serem armazenados os dados do cliente
        session_start();

        //Armazenando os dados do funcionário na SESSION
        $_SESSION['id'] = $dados['idFuncionarios'];
        $_SESSION['nome'] = $dados['nome'];
        $_SESSION['cpf'] = $dados['cpf'];
        $_SESSION['salario'] = $dados['salario'];
        $_SESSION['email'] = $dados['email'];
        $_SESSION['telefone'] = $dados['telefone'];
        $_SESSION['nivelAcesso'] = $dados['nivelAcesso'];

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);
    }

    //Metodo para realizar o update nos dados do funcionario selecionado previamente, esta função recebe como parametro os novos dados à serem armazenados no banco de dados
    public function updateFuncionario($id, $nome, $cpf, $salario, $email, $telefone, $nivelAcesso)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do UPDATE do fornecedor em uma variável
        $query = "UPDATE funcionarios
        SET
        nome = '$nome',
        cpf = '$cpf',
        salario = '$salario',
        email = '$email',
        telefone = '$telefone',
        nivelAcesso = '$nivelAcesso'
        WHERE idFuncionarios = '$id'";

        //Executando a query de update
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);
    }

    
    //Metodo para deletar o registro de um funcionario na base de dados, esta função recebe como parâmetro o id do funcionario à ser consultado
    public function deleteFuncionario($id)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do DELETE do cliente em uma variável
        $query = "DELETE FROM funcionarios WHERE idFuncionarios='$id'";
        
        //Executando a query de update
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);
    }

}

//Conectando ao banco de dados
$con = new mysqli("localhost", "root", "", "floricultura");

//Consultando banco de dados
$qryLista = mysqli_query($con, "SELECT * FROM funcionarios");
$qtndFuncionarios = mysqli_num_rows($qryLista);
