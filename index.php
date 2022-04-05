<?php

require_once("pessoa.class.php");
require_once("empresa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome("Miguel Freitas de Souza");
echo $pessoa->getNome();

$pessoa = new Empresa();
$pessoa->setRazaoSocial("Escola XPTO LTDA");
echo $pessoa->getRazaoSocial();
?>