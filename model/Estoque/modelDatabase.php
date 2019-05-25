<?php

//Classe model do estoque com seus metodos para manuseamento dos seus registros no banco de dados
class Estoque
{
    //Metodo para inserir um novo registro de produto no banco de dados, esta função recebe como parâmetro os campos do formulário da tela de cadastro de produtos
    public function insertProduto($nome, $categoria, $preco, $validade, $fornecedor)
    {
        //Armazenando a conexão com o banco de dados em uma variável
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do INSERT do produto em uma variável
        $query = "INSERT INTO produtos VALUES (0, '$fornecedor', '$nome', '$categoria', '$preco', '$validade', '0')";

        //Executando a query de insert
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);

        //Retorno da função exibindo a confirmação de cadastro de um novo produto na base de dados
        echo "<script>alert('Produto cadastrado com sucesso');</script>";
    }

    //Metodo para selecionar os dados de um produto registrado, esta função recebe como parâmetro o id do produto à ser consultado
    public function selectProdutos($id)
    {
        //Armazenando a conexão com o banco de dados em uma variável
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do SELECT do produto em uma variável
        $query = "SELECT * FROM produtos WHERE idProdutos ='$id'";

        //Armazenando o resultado da consulta em uma variável
        $resultado = mysqli_query($conexao, $query);

        //Criando um array associativo com os dados obtidos através da query
        $dados = mysqli_fetch_assoc($resultado);

        //Iniciando uma sessão para serem armazenados os dados do produto
        session_start();

        //Armazenando os dados do produto na SESSION
        $_SESSION['id'] = $dados['idProdutos'];
        $_SESSION['cod_fornecedor'] = $dados['Fornecedores_idFornecedores'];
        $_SESSION['nome'] = $dados['nome'];
        $_SESSION['categoria'] = $dados['categoria'];
        $_SESSION['preco'] = $dados['preco'];
        $_SESSION['validade'] = $dados['validade'];
        $_SESSION['quantidade'] = $dados['quantidade'];

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);
    }

    //Metodo para realizar a entrada de produtos no estoque, recebe como parâmetros o id do produto e o valor da entrada
    public function entradaEstoque($id, $entrada)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do SELECT do produto em uma variável
        $query = "SELECT * FROM produtos WHERE idProdutos='$id'";

        //Armazenando o resultado da consulta em uma varíavel
        $resultado = mysqli_query($conexao, $query);

        //Criando um array associativo com os dados obtidos através da query
        $dados = mysqli_fetch_assoc($resultado);

        //Calculando a entrada do produto (estoque atual + entrada)
        $quantidade = $entrada + $dados['quantidade'];

        //Armazenando a query do UPDATE do produto em uma variável
        $query = "UPDATE produtos SET quantidade = '$quantidade' WHERE idProdutos = '$id'";

        //Executando a query de update
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);

        //Retorno da função exibindo a confirmação da entrada dos produto na base de dados
        echo "<script>alert('Entrada dos produtos executada com sucesso');</script>";
    }

    //Metodo para realizar a baixa de produtos no estoque, recebe como parâmetros o id do produto e o valor da baixa
    public function baixaEstoque($id, $saida)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do SELECT do produto em uma variável
        $query = "SELECT * FROM produtos WHERE idProdutos='$id'";

        //Armazenando o resultado da consulta em uma varíavel
        $resultado = mysqli_query($conexao, $query);

        //Criando um array associativo com os dados obtidos através da query
        $dados = mysqli_fetch_assoc($resultado);

        //Calculando a baixa do produto no estoque (estoque atual - baixa)
        $quantidade = $dados['quantidade'] - $saida;

        //Armazenando a query do UPDATE do produto em uma variável
        $query = "UPDATE produtos SET quantidade = '$quantidade' WHERE idProdutos='$id'";

        //Executando a query de update
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);
        
        //Retorno da função exibindo a confirmação da baixa dos produto na base de dados
        echo "<script>alert('Baixa executada com sucesso');</script>";
    }

    //Metodo para deletar o registro de um produto na base de dados, esta função recebe como parâmetro o id do produto à ser deletado
    public function excluirProduto($id)
    {

        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do DELETE do produto em uma variável
        $query = "DELETE FROM produtos WHERE idProdutos='$id'";

        //Executando a query de update
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);
        
        echo "<script>alert('Produto deletado com sucesso');</script>";

    }

}

//Conectando ao banco de dados
$con = new mysqli("localhost", "root", "", "floricultura");

//Consultando banco de dados
$qryLista = mysqli_query($con, "SELECT * FROM produtos");
$qtndProdutos = mysqli_num_rows($qryLista);
