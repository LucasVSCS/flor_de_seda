<?php

//Adicionando a model do estoque ao controller
require '../../model/Estoque/modelDatabase.php';

//Instanciando a classe Model do estoque para serem usados seus metodos.
$estoque = new Estoque();

//Condicional para verificar se o usuário deseja inserir um novo registro da tabela pedidos no banco de dados
if (isset($_POST['enviar'])) {

    //Chamando o metodo da classe model do estoque para inserir um novo registro no banco de dados passando seus campos como parâmetro
    $estoque->insertProduto(
        $_POST['nome'],
        $_POST['categoria'],
        $_POST['preco'],
        $_POST['validade'],
        $_POST['fornecedor']
    );

    //Redireciona o usuário para a tela de visualização de registros dos produtos
    header("Location: ../../visualizarEstoque.php");

//Condicional para verificar se o usuário selecionou realizar a entrada de produtos no estoque
} elseif (isset($_GET['entrada'])) {

    //Chamando o metodo da classe model para realizar a entrada de produtos no estoque,
    //recebendo como parâmetros o id do produto e a quantidade a ser adicionada ao estoque
    $estoque->entradaEstoque($_GET['id'], $_GET['valorEntrada']);

    //Redireciona o usuário para a tela de visualização de registros dos produtos
    header("Location: ../../visualizarEstoque.php");

//Condicional para verificar se o usuário selecionou realizar a baixa de produtos no estoque
} elseif (isset($_GET['baixa'])) {

    //Chamando o metodo da classe model para realizar a baixa de produtos no estoque,
    //recebendo como parâmetros o id do produto e a quantidade a ser retirada ao estoque
    $estoque->baixaEstoque($_GET['id'], $_GET['valorSaida']);

    //Redireciona o usuário para a tela de visualização de registros dos produtos
    header("Location: ../../visualizarEstoque.php");

//Condicional para verificar se o usuário selecionou realizar a exclusão de um dos produtos do estoque
} elseif (isset($_GET['excluir'])) {

    //Chamando o metodo da classe model para realizar a exclusão de produtos da base de dados,
    //recebe como parâmetro o id do produto
    $estoque->excluirProduto($_GET['id']);

    //Redireciona o usuário para a tela de visualização de registros dos produtos
    header("Location: ../../visualizarEstoque.php");
}
