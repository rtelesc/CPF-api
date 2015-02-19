
<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset=utf-8 />
<title>Exemplo do tutorial Como Buscar Nomes de Pessoas Físicas a Partir de CPFs Usando a API do BipBop</title>
<style>
  input {
    font-size: 15px;
    width: 300px;
  }
</style>
</head>

<body>

<form>
  <p>

  <label>CPF:</label>
    <input type="text" name="cpf" id="cpf" placeholder="CPF"></input>
  </p>

  <p>
  <label>Nome:</label>
    <input type="text" name="nome" id="nome" placeholder="Nome" disabled="disabled"></input>
  </p>

  <p id="status"></p>
</form>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://irql.bipbop.com.br/js/jquery.bipbop.min.js"></script>

<script>
  $(function(){
    function validCPF (cpf) {
      return cpf.match(/^\d{3}\.?\d{3}\.?\d{3}\-?\d{2}$/);
    }

    BIPBOP_KEY = 'c09a99c7982f40408bf5488d6ed8c5cd';

    $('#cpf').keyup(function(){
      var cpf = this.value;

      if (validCPF(cpf)) {
        $().bipbop("SELECT FROM 'BIPBOPJS'.'CPFCNPJ'", BIPBOP_KEY, {
          data: { documento: cpf },

          success: function(data) {
            var nome = $(data).find("body nome").text();
            var exception = $(data).find("header exception").text();

            if (exception) {
              exception = exception.replace(/, t/, '. T');
              $('#status').text(exception);
            } else {
              $("#nome").val(nome);
            }
          }
        });
      }
    });
  });
</script>
</body>
</html>
