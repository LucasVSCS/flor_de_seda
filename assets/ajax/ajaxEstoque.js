$(document).ready(function() {
  $("#tabelaEstoque").empty(); //Limpando a tabela
  $.ajax({
    type: "post", //Definimos o método HTTP usado
    dataType: "json", //Definimos o tipo de retorno
    url: "getEstoque.php", //Definindo o arquivo onde serão buscados os dados
    success: function(dados) {
      for (var i = 0; dados.length > i; i++) {
        //Adicionando registros retornados na tabela
        $("#tabelaEstoque").append(
          "<tr><td>" +
            dados[i].idProdutos +
            "</td><td>" +
            dados[i].nome +
            "</td><td>" +
            dados[i].categoria +
            "</td><td> R$ " +
            dados[i].preco +
            "</td><td>" +
            dados[i].validade +
            "</td><td>" +
            dados[i].quantidade +
            "</td></tr>"
        );
      }
    }
  });
});
