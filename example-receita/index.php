<?php

require_once("../classes/cpf-Receita.php");

$cpf = new ConsultaCPF();

$cpf->SetCPF("13326724691");

if($cpf->consultar()){

print $cpf->GetXml()."\n";
} else {

print "Consulta falhou: \n";

print $cpf->error()."\n";
}