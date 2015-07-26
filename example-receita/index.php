<?php
require_once ("../classes/cpf-Receita.php");

$cpf = new ConsultaCPF();
$cpf->SetCPF("13326724691");
$cpf->SetNasc("14121947"); // dia mes ano
if($cpf->consultar()){
	print $cpf->Getjson()."\n";
} else {
	print "Consulta falhou: \n";
	print $cpf->error()."\n";
}
