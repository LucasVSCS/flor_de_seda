<?php

//Conectando ao banco de dados
$con = new mysqli("localhost", "root", "", "floricultura");

//Consultando banco de dados
$qryLista = mysqli_query($con, "SELECT * FROM pedidos");

while ($resultado = mysqli_fetch_assoc($qryLista)) {
    $vetor[] = array_map('utf8_encode', $resultado);
}

//Passando vetor em forma de json
echo json_encode($vetor);

mysqli_close($con);
