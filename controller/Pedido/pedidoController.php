<?php
//Adicionando a model do pedido ao controller
require '../../model/Pedidos/modelDatabase.php';

//Instanciando a classe Model do pedido para serem usados seus metodos.
$pedidos = new Pedidos();

//Condicional para verificar se o usuário deseja inserir um novo registro da tabela pedidos no banco de dados
if (isset($_POST['enviar'])) {

    //Chamando o metodo da classe model de pedidos para inserir um novo registro no banco de dados passando seus campos como parâmetro
    $pedidos->insertPedido(
        $_POST['cliente'],
        $_POST['produto'],
        $_POST['funcionario'],
        $_POST['quantidade'],
        $_POST['descricao']
    );

    //Redireciona o usuário para a tela de visualização de registros dos pedidos
    header("Location: ../../visualizarPedidos.php");
}elseif (isset($_GET['excluir'])) {

    //Chamando o metodo da classe model para deletar o registro de um funcionario consultado pelo seu id (passado atráves do parâmetro)
    $pedidos->excluirPedido($_GET['id']);
    header("Location: ../../visualizarPedidos.php");
}
