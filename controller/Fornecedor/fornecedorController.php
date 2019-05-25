<?php

//Adicionando a model do fornecedor ao controller
require '../../model/Fornecedores/modelDatabase.php';

//Instanciando a classe Model do fornecedores para serem usados seus metodos.
$fornecedores = new Fornecedor();

//Condicional para verificar se o usuário deseja inserir um novo registro da tabela fornecedores no banco de dados
if (isset($_POST['enviar'])) {

    //Chamando o metodo da classe model do fornecedor para inserir um novo registro no banco de dados passando seus campos como parâmetro
    $fornecedores->insertFornecedor(
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
    echo "<script>alert('Fornecedor cadastrado com sucesso');window.location.href='../../visualizarFornecedores.php';</script>";

//Condicional para verificar se o usuário selecionou um dos registros dos fornecedores para ser alterado
} elseif (isset($_GET['editar'])) {

    //Chamando o metodo da classe model para selecionar os dados de um fornecedores consultado pelo seu id (passado atráves do parâmetro) 
    $fornecedores->selectFornecedores($_GET['id']);

    //Redireciona o usuário para a tela de edição de dados do fornecedor selecionado
    header("Location: ../../editaFornecedores.php");

//Condicional para verificar se o usuário deseja alterar os dados de um fornecedor
} elseif (isset($_POST['alterarDados'])) {

    //Chamando o metodo da classe model para realizar um update nos dados do fornecedor de acordo com os campos digitados que serão passados por parâmetros na função
    $fornecedores->updateFornecedor(
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

    //Redireciona o usuário para a tela de visualização de registros dos fornecedores
    echo "<script>alert('Fornecedor alterado com sucesso');window.location.href='../../visualizarFornecedores.php';</script>";

//Condicional para verificar se o usuário deseja excluir o registro de um dos fornecedores
} elseif (isset($_GET['excluir'])) {

    //Chamando o metodo da classe model para deletar o registro de um fornecedor consultado pelo seu id (passado atráves do parâmetro)
    $fornecedores->deleteFornecedor($_GET['id']);

    //Redireciona o usuário para a tela de visualização de registros dos fornecedores
    echo "<script>alert('Fornecedor deletado com sucesso');window.location.href='../../visualizarFornecedores.php';</script>";
}
