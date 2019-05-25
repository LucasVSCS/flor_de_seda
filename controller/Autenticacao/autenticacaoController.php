<?php 

require '../../model/Autenticacao/modelAutenticacao.php';

$autenticacao = new Autenticacao();

$autenticacao->verificaUsuario($_POST['email'], $_POST['cpf']);