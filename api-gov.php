<?php
 
 // Variaveis da Api
        $dados = $_GET['tipo'];
        $cpf = $_GET['cpf'];   
        $url = 'http://www.juventudeweb.mte.gov.br/pesquisa_jovem.asp?cpf='.$cpf;
        $session = curl_init($url);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($session);
        curl_close($session);
        $data = explode("\n",$data);  
       
// Pega nome do portador do CPF
        if($dados == "nome"){
                $nome = str_replace('parent.document.getElementById("txtnome").value="'," ",$data[8]);
                $nome = str_replace('";//NOmejovem'," ",$nome);
                  echo "$nome";   
        }
       
       // Pega nome do da mãe do portador do CPF
        if($dados == "mae"){
                $nome_m = str_replace('parent.document.getElementById("txtnomemae").value="'," ",$data[10]);
                $nome_m = str_replace('";//bairro'," ",$nome_m);
         echo "$nome_m";   
        } 
    
    // Pega Sexo do portador do CPF
            if($dados == "sexo"){
                 $sexo = str_replace('parent.document.getElementById("txtDtNascimento").value="'," ",$data[15]);
                $sexo = str_replace('";//UF'," ",$sexo);
                echo "$sexo";   
        }
       
 // Verifica se variavel busca esta vazia
if ($cpf == "nada")
{
    //echo "<script>alert('Digite um CPF Valido');</script>";
    echo "<h1>Digite um CPF Válido</h1>";
    exit;
}
?>
