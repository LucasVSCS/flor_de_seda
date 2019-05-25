<?php
//Adicionando a model do cliente ao controller
require '../../model/Cliente/modelDatabase.php';

//Instanciando a classe Model do cliente para serem usados seus metodos.
$cliente = new Cliente();

//Condicional para verificar se o usuário deseja inserir um novo registro da tabela clientes no banco de dados
if (isset($_POST['enviar'])) {

    //Chamando o metodo da classe model do cliente para inserir um novo registro no banco de dados passando seus campos como parâmetro
    $cliente->insertCliente(
        $_POST['cnpj'],
        $_POST['razao'],
        $_POST['foneUm'],
        $_POST['foneDois'],
        $_POST['mail'],
        $_POST['estado'],
        $_POST['cidade'],
        $_POST['cep'],
        $_POST['bairro'],
        $_POST['logradouro'],
        $_POST['complemento']
    );

    //Redireciona o usuário para a tela de visualização de registros dos clientes
    header("Location: ../../visualizarClientes.php");

//Condicional para verificar se o usuário selecionou um dos registros dos clientes para ser alterado
} elseif (isset($_GET['editar'])) {

    //Chamando o metodo da classe model para selecionar os dados de um cliente consultado pelo seu id (passado atráves do parâmetro) 
    $cliente->selectCliente($_GET['id']);

    //Redireciona o usuário para a tela de edição de dados do cliente selecionado
    header("Location: ../../editaClientes.php");

//Condicional para verificar se o usuário deseja alterar os dados de um cliente
} elseif (isset($_POST['alterarDados'])) {

    //Chamando o metodo da classe model para realizar um update nos dados do Cliente de acordo com os campos digitados que serão passados por parâmetros na função
    $cliente->updateCliente(
        $_POST['id'],
        $_POST['cnpj'],
        $_POST['razao'],
        $_POST['foneUm'],
        $_POST['foneDois'],
        $_POST['mail'],
        $_POST['estado'],
        $_POST['cidade'],
        $_POST['cep'],
        $_POST['bairro'],
        $_POST['logradouro'],
        $_POST['complemento']
    );   

    //Redireciona o usuário para a tela de visualização de registros dos clientes
    header("Location: ../../visualizarClientes.php");

//Condicional para verificar se o usuário deseja excluir o registro de um dos clientes
} elseif (isset($_GET['excluir'])) {

    //Chamando o metodo da classe model para deletar o registro de um cliente consultado pelo seu id (passado atráves do parâmetro)
    $cliente->deleteCliente($_GET['id']);

    //Redireciona o usuário para a tela de visualização de registros dos clientes
    header("Location: ../../visualizarClientes.php");
}