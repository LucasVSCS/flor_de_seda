<?php
//Adicionando a model do funcionario ao controller
require '../../model/Funcionarios/modelDatabase.php';

//Instanciando a classe Model do funcionario para serem usados seus metodos.
$funcionario = new Funcionario();

//Condicional para verificar se o usuário deseja inserir um novo registro da tabela funcionarios no banco de dados
if (isset($_POST['enviar'])) {

    //Chamando o metodo da classe model do funcionario para inserir um novo registro no banco de dados passando seus campos como parâmetro
    $funcionario->insertFuncionario(
        $_POST['nome'],
        $_POST['cpf'],
        $_POST['salario'],
        $_POST['mail'],
        $_POST['telefone'],
        $_POST['nivelAcesso']
    );

    //Redireciona o usuário para a tela de visualização de registros dos funcionarios
    echo "<script>alert('Funcionario cadastrado com sucesso');window.location.href='../../visualizarFuncionarios.php';</script>";

//Condicional para verificar se o usuário selecionou um dos registros dos funcionarios para ser alterado
} elseif (isset($_GET['editar'])) {

    //Chamando o metodo da classe model para selecionar os dados de um funcionario consultado pelo seu id (passado atráves do parâmetro) 
    $funcionario->selectFuncionarios($_GET['id']);

    //Redireciona o usuário para a tela de edição de dados do funcionario selecionado
    header("Location: ../../editaFuncionarios.php");

//Condicional para verificar se o usuário deseja alterar os dados de um funcionario  
} elseif (isset($_POST['alterarDados'])) {

    //Chamando o metodo da classe model para realizar um update nos dados do funcionario de acordo com os campos digitados que serão passados por parâmetros na função
    $funcionario->updateFuncionario(
        $_POST['id'],
        $_POST['nome'],
        $_POST['cpf'],
        $_POST['salario'],
        $_POST['mail'],
        $_POST['telefone'],
        $_POST['nivelAcesso']
    );
    echo "<script>alert('Funcionario alterado com sucesso');window.location.href='../../visualizarFuncionarios.php';</script>";

//Condicional para verificar se o usuário deseja excluir o registro de um dos funcionarios
} elseif (isset($_GET['excluir'])) {

    //Chamando o metodo da classe model para deletar o registro de um funcionario consultado pelo seu id (passado atráves do parâmetro)
    $funcionario->deleteFuncionario($_GET['id']);
    echo "<script>alert('Funcionario deletado com sucesso');window.location.href='../../visualizarFuncionarios.php';</script>";
}
