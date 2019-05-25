$(document).ready(function() {
  $("#tabelaFuncionarios").empty(); //Limpando a tabela
  $.ajax({
    type: "post", //Definimos o método HTTP usado
    dataType: "json", //Definimos o tipo de retorno
    url: "getFuncionarios.php", //Definindo o arquivo onde serão buscados os dados
    success: function(dados) {
      for (var i = 0; dados.length > i; i++) {
        //Adicionando registros retornados na tabela
        $("#tabelaFuncionarios").append(
          "<tr><td>" +
            dados[i].idFuncionarios +
            "</td><td>" +
            dados[i].nome +
            "</td><td>" +
            dados[i].cpf +
            "</td><td>" +
            dados[i].salario +
            "</td><td>" +
            dados[i].email +
            "</td><td>" +
            dados[i].telefone +
            "</td><td>" +
            dados[i].nivel_acesso +
            "</td></tr>"
        );
      }
    }
  });
});
