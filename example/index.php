<!DOCTYPE HTML>
<html>
<head>
<title>CPF API</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="all" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.2/cosmo/bootstrap.min.css">
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script type="text/javascript">      
     $(document).ready(function(){
         $("#buscaProduto").click(function(){
            var nomeProduto = $("#nomeProduto").val();
               var tipo = $("#tipo").val();      
               if (nomeProduto == "") {
                nomeProduto = "nada"
               };       
            $.ajax({  
                   url: "../api-gov.php?tipo="+ tipo + "&cpf=" + nomeProduto, 
                   dataType: 'html',
                   data: {produto:nomeProduto},
                   type: "POST", 
                    beforeSend: function ()   { 
                        $('#carregando').show();
                    },
                    success: function(data){
                        $('#carregando').hide();
                        $("#resBusca").html('<center><br/>'+ data + '</center>' );
                    },
                    error: function(data){
                        $('#carregando').html(data);
                    }
            });
         });
     });
</script>
</head>
<body>
<center>
<h2>CPF</h2>
<!--Aqui o formulário -->
<input type="text" id="nomeProduto" class="form-control" placeholder="Ex.: 15016098750" name="produto" style="max-width: 400px;width: 90%;margin: 0 auto;"></br></br>

</br></br>
<button type="button" id="buscaProduto" class="btn btn-success btn-lg btn-block" style="max-width: 380px; width: 90%; margin: 0 auto;">Procurar</button>
<!--Fim do formulário-->
</center>
<br/>
<center>
<div id="carregando" style="display:none;">
  <img src="carregando.gif"/>
</div>
<center>
<!--Aqui é onde vai aparecer o resultado da busca-->
<h1><div id="resBusca">
</div></h1>
</body>
</html>
