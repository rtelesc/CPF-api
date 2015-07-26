Consultar CPF usando Jquery/PHP

Projeto desenvolvido para auxiliar na consulta/verificação de CPFs, informando os dados do portador.


*************************** Exemplo *****************

require_once("Cpf-Receita.php");

$cpf = new ConsultaCPF();

$cpf->SetCPF("13326724691");

if($cpf->consultar()){

	print $cpf->GetXml()."\n";
	
} else {

	print "Consulta falhou: \n";
	
	print $cpf->error()."\n";
	
}

