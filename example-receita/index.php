<?php
require_once ("../classes/cpf-Receita.php");

$cpf = new ConsultaCPF();

if (empty($_GET['cpf']))
    {
    $cpf->SetCPF("13326724691"); // CPF exemplo
    if ($cpf->consultar())
        {
        print $cpf->GetXml() . "\n";
        }
      else
        {
        print "Consulta falhou: \n";
        print $cpf->error() . "\n";
        }
    }

if (!empty($_GET['cpf']))
    {
    $cpf->SetCPF($_GET['cpf']);
    if ($cpf->consultar())
        {
        print $cpf->GetXml() . "\n";
        }
      else
        {
        print "Consulta falhou: \n";
        print $cpf->error() . "\n";
        }
    }
