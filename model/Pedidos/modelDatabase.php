<?php

//Classe model de pedidos com seus metodos para manuseamento dos seus registros no banco de dados
class Pedidos
{

    //Metodo para inserir um novo pedido no banco de dados, esta função recebe como parâmetro os campos do formulário da tela de cadastro de pedidos
    public function insertPedido($idCliente, $idProduto, $idFuncionario, $quantidade, $descricao)
    {
        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do INSERT do pedido em uma variável
        $query = "INSERT INTO pedidos VALUES (0, '$idCliente', '$idProduto', '$idFuncionario', '$quantidade', '$descricao')";

        //Executando a query de insert
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);

        //Retorno da função exibindo a confirmação de cadastro de um novo pedido na base de dados
        echo "<script>alert('Pedido cadastrado com sucesso');</script>";
    }

    //Metodo para deletar o registro de um pedido na base de dados, esta função recebe como parâmetro o id do pedido à ser deletado
    public function excluirPedido($id)
    {

        //Armazenando a conexão com o banco de dados em uma varíavel
        $conexao = mysqli_connect("localhost", "root", "", "floricultura");

        //Armazenando a query do DELETE do produto em uma variável
        $query = "DELETE FROM pedidos WHERE idPedidos ='$id'";

        //Executando a query de update
        mysqli_query($conexao, $query);

        //Fechando a conexão com o banco de dados
        mysqli_close($conexao);
        
        echo "<script>alert('Pedido deletado com sucesso');</script>";

    }
}

//Conectando ao banco de dados
$con = new mysqli("localhost", "root", "", "floricultura");

//Consultando banco de dados
$qryLista = mysqli_query($con, "SELECT * FROM pedidos");
$qtndPedidos = mysqli_num_rows($qryLista);
