Consultar CPF usando Jquery/PHP

Projeto desenvolvido para auxiliar na consulta/verificação de CPFs, informando os dados do portador.

A variável cpf reconhece os digitos sem pontuação.

cpf=87150526640

api-gov.php?cpf=87150526640

Exemplo Pratico com Jquery

https://github.com/slaureano/CPFapi/tree/master/example


*************************** Segundo exemplo *****************

require_once("Cpf-Receita.php");

$cpf = new ConsultaCPF();

$cpf->SetCPF("13326724691");

if($cpf->consultar()){

	print $cpf->GetXml()."\n";
	
} else {

	print "Consulta falhou: \n";
	
	print $cpf->error()."\n";
	
}

