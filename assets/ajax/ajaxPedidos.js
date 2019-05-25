$(document).ready(function () {
    $("#tabelaPedidos").empty(); //Limpando a tabela
    $.ajax({
        type: "post", //Definimos o método HTTP usado
        dataType: "json", //Definimos o tipo de retorno
        url: "getPedidos.php", //Definindo o arquivo onde serão buscados os dados
        success: function (dados) {
            for (var i = 0; dados.length > i; i++) {
                
                //Adicionando registros retornados na tabela
                $("#tabelaPedidos").append(
                    "<tr><td>" +
                    dados[i].idPedidos +
                    "</td><td>" +
                    dados[i].Clientes_idClientes +
                    "</td><td>" +
                    dados[i].Funcionario_idFuncionario +
                    "</td><td>" +
                    dados[i].Produtos_idProdutos +
                    "</td><td>" +     
                    dados[i].quantidade +
                    "</td><td>" +
                    dados[i].descricao +
                    "</td><tr>"
                );
            }
        }
    });
});