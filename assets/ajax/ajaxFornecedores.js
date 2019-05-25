$(document).ready(function() {
  $("#tabelaFornecedores").empty(); //Limpando a tabela
  $.ajax({
    type: "post", //Definimos o método HTTP usado
    dataType: "json", //Definimos o tipo de retorno
    url: "getFornecedores.php", //Definindo o arquivo onde serão buscados os dados
    success: function(dados) {
      for (var i = 0; dados.length > i; i++) {
        //Adicionando registros retornados na tabela
        $("#tabelaFornecedores").append(
          "<tr><td>" +
            dados[i].idFornecedores +
            "</td><td>" +
            dados[i].cnpj +
            "</td><td>" +
            dados[i].razao +
            "</td><td>" +
            dados[i].fone_um +
            "</td><td>" +
            dados[i].fone_dois +
            "</td><td>" +
            dados[i].email +
            "</td><td>" +
            dados[i].estado +
            "</td><td>" +
            dados[i].cidade +
            "</td><td>" +
            dados[i].cep +
            "</td></tr>"
        );
      }
    }
  });
});