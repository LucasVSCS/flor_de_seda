<?php

class Autenticacao
{
    public function verificaUsuario($email, $cpf)
    {
        $connection = mysqli_connect("localhost", "root", "", "floricultura");

        $query = "SELECT * FROM funcionarios WHERE email ='$email' AND cpf = '$cpf'";
        $resultado = mysqli_query($connection, $query);
        if (mysqli_num_rows($resultado) >= 1) {

            echo "<script>alert('Usuário logado com sucesso');window.location.href='../../index.php';</script>";
            $dados = mysqli_fetch_assoc($resultado);
            session_start();
            $_SESSION['nome'] = $dados['nome'];
            $_SESSION['cpf'] = $dados['cpf'];
            $_SESSION['email'] = $dados['email'];
            $_SESSION['nivelAcesso'] = $dados['nivel_acesso'];
            mysqli_close($connection);

        } else {
            echo "<script>alert('Email ou CPF incorretos');window.location.href='../../autentica.php';</script>";
        }
    }
}
