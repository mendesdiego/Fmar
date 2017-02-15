<?php 

$host       = 'mysql.grupoandrademartins.com.br';
$usuario    = 'famart_site';
$senha      = 'fFKLT6yxfzxrBs5C';
$banco      = 'famart_site';
$con= mysql_connect($host,$usuario,$senha)or die(mysql_error());
mysql_query("SET NAMES 'utf8';");
mysql_select_db($banco,$con) or die(mysql_error());


